<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\categorie;
use App\produit;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie=categorie::where('parent_id','=',0)->paginate(20);
        return view('dashboard.categorie')->with(array(
                'categorie' => $categorie,
            )
        );
    }

    

    public function search(Request $request)
    {
        $data=$request->recherche;
        $pos=strpos($data, 'VIORE-');

        if ($pos === false) {
            $categorie=categorie::where('nomclient', 'like', '%'.$data.'%')->paginate(20);
            if ($categorie != null) {
                return view('dashboard.categorie')->with(array(
          'categorie'=>$categorie,
        ));
            } else {
                return view('dashboard.categorie');
            }
        } 
    }
       
        
    

    public function detailcat($id){
        $cat=categorie::where('parent_id','=',$id)->get();
        if(sizeof($cat) > 0){
            return view('dashboard.souscategorie')->with(
                array(
                    'cat'=>$cat,
                )
            );
        }else{
            return back()->with('flash_message_error',"La catégorie n'a pas des sous catégories");
        }
        
    }

    
    public function store(Request $request)
    {
        // $data=$request->all();
        // if( $request->hasFile('image')){
        //     $image_tmp=Input::file('image');
        //     if($image_tmp->isValid()){
        //        $extension =$image_tmp->getClientOriginalExtension();
               
        //        $filename=rand(111,999).'.'.$extension;
        //        $large_image_path='img/categorie/'.$filename;
              
        //        //Resize Images
        //        Image::make($image_tmp)->save($large_image_path);

        //     }
    
        //     $data=$request->all();
        //     $categorie=new categorie;
        //     $categorie->nom=$data['nom'];
        //     $categorie->parent_id=$data['parent_id'];
        //     $categorie->description=$data['description'];
        //     $categorie->url=$data['url'];
        //     $categorie->icon=$filename;
        //     if($data['parent_id']==0){
        //         $categorie->status=0;
        //     }
        //     else{
        //         $categorie->status=1;
        //     }
        //     $categorie->save();
        //    // return view('dashboard.categorie')->with('flash_message_success','Catégorie ajouté avec succée');
        
        // $file = $request->file('img_cat');
		// $fileName = time() . '.' . $file->getClientOriginalExtension();     
        // $file->move('images/', $fileName);
		// $empData = [  'img_cat' => $fileName, 
        // 'nom' => $request->nom,
        // 'description' => $request->description,
        // 'icon' => $request->icon,
        //  'slug' => $request->slug, 
        //  'parent_id'=>$request->parent_id
        //  ];
        //  if($request['parent_id']==0){
        //         $categorie->status=0;
        //     }
        //     else{
        //         $categorie->status=1;
        //     }
        //  categorie::create($empData);
        $data=$request->all();
        // dd($data);
        $categorie= new categorie();
        $categorie->nom = $data['nom'];
        if ($image = $request->file('img_cat')) {
            $destinationPath = 'img/categorie';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $categorie->icon = "$profileImage";
        }
        $categorie->description = $data['description'];
        $categorie->url = $data['url'];
        $categorie->parent_id= $data['parent_id'];
        if($request['parent_id']==0){
                $categorie->status=0;
            }
            else{
                $categorie->status=1;
            }
    //    dd($categorie);
        $categorie->save();
   
        // return redirect('/partenaire_service')->with('flash_message_success','partenaire  est ajouter .');
            return redirect('/Categorie')
            ->with('flash_message_success','Catégorie ajouter avec succés');
    }

    /****Retourner les catégories principales */
    public function Level(){
        $level=categorie::where('parent_id','=',0)->get();
        $slevel=categorie::where('parent_id','=',1)->get();

        return view('dashboard.ajout_categorie')->with(array(
            'level' => $level,
            'slevel'=>$slevel
        ));
    }

   
    public function update(Request $request, $id)
    {   $level=categorie::where('parent_id','=',0)->get();
        $categorie=categorie::find($id);
        if ($request->isMethod('post')) {
             $data=$request->all();
        // dd($data);
        // $categorie= new categorie();
        $categorie->nom = $data['nom'];
        if ($image = $request->file('img_cat')) {
            $destinationPath = 'img/categorie';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $categorie->icon = "$profileImage";
        }
        $categorie->description = $data['description'];
        $categorie->url = $data['url'];
        $categorie->parent_id= $data['parent_id'];
        if($request['parent_id']==0){
                $categorie->status=0;
            }
            else{
                $categorie->status=1;
            }
            $categorie->update();
            return redirect('/Categorie')->with('flash_message_success','La catégorie est modifier');
        }else{
            return view('dashboard.update_categorie')->with(array(
                'categorie' => $categorie,
                'level' => $level,
            ));
        }
    }

    
    public function destroy(Request $request)
    {
        $id=$request->get('categorie');
        $cat=categorie::find($id);
        if ($cat->parent_id != 0) {
            $cat->delete();
        }else{
            $souscategorie=categorie::where("parent_id","=",$cat->id);
            $souscategorie->delete();
            $cat->delete();
        }
        
        return back();
        
    }
}
