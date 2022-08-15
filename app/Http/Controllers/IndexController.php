<?php

namespace App\Http\Controllers;

use DB;

use Session;
use App\avis;
use App\cart;
use App\User;
use App\Coupon;
use App\produit;
use App\commande;
use App\wishlist;
use App\categorie;
use App\pack_produit;
use App\Http\Requests;
use App\image_produit;
use App\attributproduit;
use App\DemandePartenaire;
use App\produit_commander;
use Illuminate\Http\Request;
use App\Events\DemendePartenaire;
// use App\Notifications\DemendePartenaire;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DemendePartenaireNotification;

class IndexController extends Controller
{

    /****Retourner les packs à la page boutique***/
    public function getPacksShop(){
        $product=produit::where('type','=','pack')->orderBy('id','DESC')->paginate(20);
        $cat=categorie::where('parent_id','=',0)->get();
        $categorie=categorie::all();
        return view('vitrine.boutique')->with(
            array( 
                'product'=>$product ,
                'cat'=>$cat,
                'categorie'=>$categorie, 
            ));
    }


    /**Filtrer boutique**/
    public function getCategorieProduct(Request $request,$id){
        $product=produit::where('cat_id','=',$id)->orderBy('id','DESC')->paginate(20);
       $cat=categorie::where('parent_id','=',0)->get();
       $categorie=categorie::all();
        return view('vitrine.boutique')->with(
            array( 
                'product'=>$product ,
                'cat'=>$cat,
                'categorie'=>$categorie, 
            ));
    }


    /****Consulter ou annuler commande utilisateur:client****/
    public function MyCommandClient(Request $request){
      $code=$request->get('code_commande');
      $commande=commande::where('code_commande','=',$code)->get();
      $commande=json_decode(json_encode($commande));
      foreach ($commande as $k) {
          $produits=produit_commander::where('id_commande','=',$k->id)->get();
      }

      if (sizeof($commande) > 0 && sizeof($produits) > 0 ) {
          return view('vitrine.MyCommand')->with(array(
            'commande'=>$commande,
            'produits'=>$produits,
         ));
      }else{
        return back();
      }
    }

    //Retourner les produits et les packs a la page d'acceuil
    public function get_products(){
    	$product=produit::where('type','=','produit')->orderBy('id','DESC')->take(8)->get();
        $pack=produit::where('type','=','pack')->orderBy('id','DESC')->take(8)->get();
        $avis=avis::where('etoile','=',5)->orderBy('id','DESC')->take(5)->get();
        return view('welcome')->with(
            array(
                'product'=>$product,
                'pack'=>$pack,
                'avis'=>$avis,
            )
        );
    }
    /*******section trier par */
    public function SortByInShop($tag){
        if($tag == "prix_desc"){
            $product=produit::orderBy('prix','DESC')->paginate(20);
        }
        if($tag == "prix_asc"){
            $product=produit::orderBy('prix','ASC')->paginate(20);
        }
        $cat=categorie::where('parent_id','=',0)->get();
       $categorie=categorie::all();
        return view('vitrine.boutique')->with(
            array(
                'product'=>$product,
                'cat'=>$cat,
                'categorie'=>$categorie,
              
            )
        );
    }
    /*******fin section */

    //Retourner les produits et les catégories à la page boutique
    public function get_shop_products(Request $request){
        //retourner produit a chercher
        if ($request->get('produit') != NULL) {
            $produit=$request->get('produit');
            $product=produit::where('nom','like','%'.$produit.'%')->orderBy('id','DESC')->paginate(20);
        }
        else{
            //retourner all product
            $product=produit::orderBy('id','DESC')->paginate(20);
        }
       
       $cat=categorie::where('parent_id','=',0)->get();
       $categorie=categorie::all();
        return view('vitrine.boutique')->with(
            array(
                'product'=>$product,
                'cat'=>$cat,
                'categorie'=>$categorie,
              
            )
        );
    }

    //fonction detail produit vitrine
    public function product($id){
        $product=produit::find($id);
        $productD =produit::with('attributes')->find($id);
        $cat=categorie::where('parent_id','=',0)->get();

        // dd($productD)
       //Si le produit est un pack returner les produit du pack
        if ($productD->type == "pack") {
            $pack=pack_produit::where('id_pack','=',$productD->id)->get();
        }else{
            $pack=NULL;
        }
        //fin test pack
        if (sizeof($productD->attributes)==0) {
            $total_stock=$productD->total_stock;
        }
        else{
           $total_stock=attributproduit::where('prod_id','=',$id)->sum('stock');
        }
        /**tableau d'image**/
        $images=image_produit::where('id_produit','=',$id)->get();
        /**fin tableau d'image**/
        //tableau de produit de méme catégorie
        $productRelated=produit::where('cat_id','=',$productD->cat_id)->get();
        /******tableau des avis de ce produit*******/
        $avis=avis::where('id_produit','=',$id)->get();
        /*****La catégorie du produit */
        $categorie=categorie::where('id','=',$productD->cat_id)->first();
       return view('vitrine.popup_produit')->with(array(
            'productD' => $productD,
            'total_stock'=>$total_stock,
            'images'=>$images,
            'productRelated'=>$productRelated,
            'pack' => $pack,
            'avis'=> $avis,
            'cat'=>$cat,
            'categorie'=>$categorie,
            "product"=>$product

        ));
    }

    public function productPopUp($id){
     $produit=produit::with('attributes')->find($id);
      return response()->json($produit);
    }

    public function getProductprice(Request $request){
        $data=$request->all();
        $proArr=explode("-",$data['idSize']);
        $proAttr=attributproduit::where(['prod_id'=>$proArr[0],'taille'=>$proArr[1]])->first();
        echo $proAttr->prix_at;
    }
    //fin produit detail
    

    //debut panier
    public function addtocart(Request $request)
    {   
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $session_id=Session::get('session_id');
        if (empty($session_id)) {
            $session_id=str_random(40);
            Session::put('session_id',$session_id);
        }
        // dd($request);
        /**Ajouter au panier**/
        if ($request->taille != 0) {
            $size=explode("-", $request->taille);
            $t=$size[1];
            $countproduct=DB::table('carts')->where(['prod_id'=>$request->prod_id ,'session_id'=>$session_id,'taille'=>$t])->count();
        }else{
            $countproduct=DB::table('carts')->where(['prod_id'=>$request->prod_id ,'session_id'=>$session_id])->count();
        }
        
        if ($countproduct > 0) {
            return redirect('/Produit/'.$request->prod_id)->with('flash_message_error','Le produit déjà existe dans le panier');
        }else
        {
            $productD=produit::with('attributes')->find($request->prod_id);
            if (sizeof($productD->attributes)==0) {
                $code=$productD->code;
                $taille=0;
            }else{
                        $sizeArr=explode("-", $request->taille);
                        $taille=$sizeArr[1];
                        if ($taille == "P") {
                            return redirect('/Produit/'.$request->prod_id)->with('flash_message_error','il faut choisir la taille');
                        }else{
                            $getSku=attributproduit::select('sku')->where(['prod_id'=>$request->prod_id,'taille'=>$taille])->first();
                            $code=$getSku->sku;
                        }
                        

            }
                
                    if($request->prod_couleur == NULL){
                        $couleur="";
                    }else{
                        $couleur=$request->prod_couleur;
                    }
                
                    $shopcart=new cart([
                    'prod_id'=>$request->prod_id,
                    'prod_nom'=>$request->prod_nom,
                    'prod_code'=>$code,
                    'prod_couleur'=>$couleur,
                    'prix'=>$request->prod_prix,
                    'quantity'=>$request->qty,
                    'session_id'=>$session_id,
                    'taille'=>$taille,
                    
                    ]);
                    if (sizeof($productD->attributes)==0) {
                        $stock=$productD->total_stock;
                    }else{
                        $getAttStock=attributproduit::where('sku','=',$shopcart->prod_code)->first();
                        $stock=$getAttStock->stock;
                    }
                    if($stock >= $shopcart->quantity){
                        $shopcart->save(); 
                    }else{
                        return redirect('/Produit/'.$request->prod_id)->with('flash_message_error',"La quantité de produit requise n'est pas disponible");
                    }
            

                }
                return redirect('/Panier');
    }
    


    public function cart(){
        $session_id=Session::get('session_id');
        $cart=cart::where('session_id','=',$session_id)->get();
        //pour retourner l'image de produit
        $productCart=produit::all();
        $cat=categorie::all();
        //retourner les catégorie(dropdown)
        return view('vitrine.cart')->with(array(
            'cart' => $cart,
            'productCart'=>$productCart,
            'cat'=>$cat
        ));
    }


    public function deleteCartProduct($id){
        $cart=cart::find($id);
        $session_id=Session::get('session_id');
        $countCart=cart::where('session_id','=',$session_id)->count();
        if($countCart > 1){
            $cart->delete();
            return back();
        }
        //Supprimer le produit et retourner a la page boutique
        if($countCart == 1){
            $cart->delete();
            return redirect('/');
        }
        
    }

    public function UpdateeCartQuantity($id,$qty){
        $cart=cart::find($id);
        $cart->quantity=$qty-1;
        if($qty-1 == 0){
            return back()->with('flash_message_error','Il faut que la quantité minimale est égale à 1');
        }
        $cart->update();
        return back();
    }


    public function UpdateeCartQuantityIncrement($id,$qty){
        $cartDetail=cart::find($id);
        $getAttStock=attributproduit::where('sku','=',$cartDetail->prod_code)->first();
        $getStock=produit::with('attributes')->find($cartDetail->prod_id);
        $quantityupdated=$cartDetail->quantity+1;
        if (sizeof($getStock->attributes)==0) {
            if($getStock->total_stock >= $quantityupdated){
            $cart=cart::find($id);
            $cart->quantity=$qty+1;
            $cart->update();
            return back();
            }else{
                return back()->with('flash_message_error',"La quantité de produit requise n'est pas disponible");
            }
        }else{
           if($getAttStock->stock >= $quantityupdated){
            $cart=cart::find($id);
            $cart->quantity=$qty+1;
            $cart->update();
            return back();
            }else{
                return back()->with('flash_message_error',"La quantité de produit requise n'est pas disponible");
            } 
        }
    }



    /***code promo***/
    public function applyCoupon(Request $request){
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        $data=$request->all();
        //echo "<pre>";print_r($data);die;
        $countCoupon=Coupon::where('coupon_code','=',$data['code_promo'])->count();
        if ($countCoupon == 0) {
            return back()->with('flash_message_error','Le code est introuvable');
        }else{
            $today = date("Y-m-d");
            $DetailCoupon=Coupon::where('coupon_code','=',$data['code_promo'])->first();
            if ($DetailCoupon['date_expiration'] < $today || $DetailCoupon['statut']==0) {
                return back()->with('flash_message_error','La date de  code est expiré ou le code est désactivé');
            }

            //Get cart total amount(montant)
            $session_id=Session::get('session_id');
            $userCart=DB::table('carts')->where(['session_id'=>$session_id])->get();
            $total_montant=0;
            foreach ($userCart as $item) {
                $total_montant=$total_montant+($item->prix*$item->quantity);
            }
            //pourcentage ou fixe
            if($DetailCoupon->montant_type == "fixe"){
                $couponMontant = $DetailCoupon->montant;
                Session::put('TypeCoupon',"Fixe");
            }else{
                $couponMontant=($total_montant) * ($DetailCoupon->montant/100);
                Session::put('TypeCoupon',"Pourcentage");
            }
            //echo $couponMontant;die;
            Session::put('CouponAmount',$couponMontant);
            Session::put('CouponCode',$data['code_promo']);
            return back();
        }
    }

    
    //fin panier


    //page checkout
    public function checkout(){
        $session_id=Session::get('session_id');
        $cart=cart::where('session_id','=',$session_id)->get();
        return view('vitrine.checkout')->with(array(
            'cart'=>$cart,
        ));
    } 
    // public function demande_partenaire(){
        
    // }
    public function demande_partenaire(Request $request){
        $this->validate($request, [
        'nom' => 'required',
        'adresse' => 'required',
        'tel' => 'required',
        'email' => 'required',
        'brith' => 'required',
        'gender' => 'required',
        'type' => 'required',
        'cin' => 'required',


    ]);
    $data=$request->all();
    // dd($data);
      $demande=new DemandePartenaire();

    // $demande=DemandePartenaire::create([
    //     'nom'=>$request->get('nom'),
    //     'adress'=>$request->get('adress'),
    //     'tel'=>$request->get('tel'),
    //     'email'=>$request->get('email'),
    //     'brith'=>$request->get('brith'),
    //     'gender'=>$request->get('gender'),
    //     'type'=>$request->get('type'),
    //     'cin'=>$request->get('cin'),

    // ]);
    $demande->nom=$data['nom'];
    $demande->adresse=$data['adresse'];
    $demande->tel=$data['tel'];
    $demande->email=$data['email'];
    $demande->brith=$data['brith'];
    $demande->gender=$data['gender'];
    $demande->type=$data['type'];
    $demande->cin=$data['cin'];
        Session::forget('session_id');

    $demande->save();
    $demandeNotificationDetails=$data;
        $admins=User::where('role', '!=', 2)->get();
        Notification::send($admins, new DemendePartenaireNotification($demandeNotificationDetails));
        event(new \App\Events\DemendePartenaire(1, $demandeNotificationDetails));
    return back();
    }
}
