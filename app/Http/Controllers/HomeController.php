<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Validator;
use App\categorie;
use App\employeur;
use App\Partenaire;
use App\fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function boutique()
    {
    $cat=categorie::all();
        // dd($cat);
        return view('welcome',compact('cat'));
    }
    public function compte(){
        $user=User::paginate(20);
        $Partenaire=Partenaire::all();
        $employeur=employeur::all();
        return view('dashboard.compte')->with(array(
            'user'=>$user,
            'employeur'=>$employeur,
            'Partenaire'=>$Partenaire,
        ));
    }

    


    public function update(Request $request,$id){
        $supplier=User::find($id);
        if ($request->image != $supplier->photo) {
            if ($request->hasFile('photo')) {
            $filename=$request->photo->getClientOriginalName();
            $request->photo->move(public_path(). '/img',$filename);
            $supplier->photo=$filename;
            }
            //  if ($image = $request->file('image')) {
            // $destinationPath = 'img/';
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            // $supplier->photo = "$profileImage"; }
        }
        $supplier->name=$request->name;
        $supplier->tel=$request->tel;
        /****Modification adresse Partenaire */
        if(Auth::user()->role == 2){
            $Partenaire=Partenaire::where('id_user','=',$id)->first();
            $Partenaire->region = $request->region;
            $Partenaire->ville = $request->ville;
            $Partenaire->adresse = $request->adresse;
            $Partenaire->postal = $request->postal;
            $Partenaire->update();
        }
        $supplier->update();
        // dd($request->all());

        /*****Modification adresse Partenaire */
        return back()->with('flash_message_success','Profile modifié');
    }

    public function search(Request $request){
        $name=$request->get('recherche');
        $user=User::where('name','like','%'.$name.'%')->get();
        $Partenaire=Partenaire::all();
        $employeur=employeur::all();
        if ($user != NULL) {
            return view('dashboard.compte')->with(
            array(
                'user' => $user,
                'Partenaire' => $Partenaire,
                'employeur' => $employeur,
            )
         );
        }
        else{
            return redirect('/Liste_Fournisseur')->with('data not found');
        }
        
    }

    public function updatepassword(Request $request){
        $id=$request->user_id;
        $supplier=User::find($id);
        if ($request->new != "") {
            if(Hash::check($request->old,$supplier->password)){
            $new=Hash::make($request->new);
            $supplier->password=$new;
            }else{
                return redirect('/logout');
            }
        }
        $supplier->update();
        return back();
    }


    /****Retourner le Partenaire a la page profile */
    public function modifierprofile(){
        $id=Auth::user()->id;
        $Partenaire=Partenaire::where('id_user','=',$id)->first();
        return view('dashboard.profile')->with(compact('Partenaire'));
    }

    /*****Marquer la notification comme notification lu*****/
    public function markAsReadNotifications(){
        $id=Auth::user()->id;
        $admin=User::find($id);
        $admin->unreadNotifications->markAsRead();
    }
}
