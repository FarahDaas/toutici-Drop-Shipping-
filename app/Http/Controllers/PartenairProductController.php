<?php

namespace App\Http\Controllers;

// use App\PartenairProduct;
use App\Partenairproduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class PartenairProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Partenaire = Partenairproduit::all();
        return view('dashboard.partenaire.Liste_Partenaire_Produit',compact('Partenaire'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if( $request->hasFile('logo')){
            $image_tmp=Input::file('logo');
            if($image_tmp->isValid()){
               $extension =$image_tmp->getClientOriginalExtension();
               $filename=rand(111,999).'.'.$extension;
               $destinationPath = 'img/';
               $image_tmp->move($destinationPath, $filename);
           
            }
           
            $product=new Partenairproduit([
            	'service'=>$request->service,
            	'nom'=>$request->nom,
            	'cin'=>$request->cin,
            	'tel'=>$request->tel,
            	'adresse'=>$request->adresse,
            	'logo'=>$filename,
                'matricule'=>$request->matricule,
                'region'=>$request->region,
                'ville'=>$request->ville,
            	'postal'=>$request->postal,
            	'id_user'=>$request->id_user,
            	'pass'=>$request->pass,
                
            ]);
            $product->save();
        }
        return redirect()->back()
                        ->with('flash_message_success','partenaire  est ajouter .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenairproduit  $Partenairproduit
     * @return \Illuminate\Http\Response
     */
    public function show(Partenairproduit $Partenairproduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenairproduit  $Partenairproduit
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenairproduit $Partenairproduit, $id)
    {
        // $detail=Partenairproduit::where('id','=',$id)->get();
        $detail=Partenairproduit::find($id);
        return view('dashboard.partenaire.Edit_Produit',compact('detail'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenairproduit  $Partenairproduit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenairproduit $Partenairproduit,$id)
    { $product=Partenairproduit::find($id);
    
    if( $request->hasFile('logo')){
            $image_tmp=Input::file('logo');
            if($image_tmp->isValid()){
               $extension =$image_tmp->getClientOriginalExtension();
               $filename=rand(111,999).'.'.$extension;
               $destinationPath = 'img/';
               $image_tmp->move($destinationPath, $filename);
           
            }
           
            
            	$product->service=$request->service;
            	$product->nom=$request->nom;
            	$product->cin=$request->cin;
            	$product->tel=$request->tel;
            	$product->adresse=$request->adresse;
            	$product->logo=$filename;
                $product->matricule =$request->matricule;
                $product->region =$request->region;
                $product->ville =$request->ville;
                $product->postal =$request->postal;
                $product->id_user =$request->id_user;
                $product->pass =$request->pass; 

            
            $product->save();
        }
        // return redirect()->back()
        //                 ->with('flash_message_success','partenaire  est ajouter .');
             return redirect('/partenaire_Produit')->with('flash_message_success','Partenaire Produit est modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenairproduit  $Partenairproduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenairproduit $Partenairproduit,$id)
    {
                $produit=Partenairproduit::find($id);
                $produit->delete();
                return back()->with('flash_message_success','Partenaire Produit est suprimer');
        
    }
    public function PartenaireVitrine()
    {
              
                return view('vitrine.partenaire.partenaireService');
        
    }
}
