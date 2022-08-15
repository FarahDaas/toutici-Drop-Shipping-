<?php

namespace App\Http\Controllers;

use App\Partenaire;
// use App\PartenaireService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PartenaireServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
            // if($request->has('search')){
            //     $search = \Request::get('search');
            //     $PartenaireService =Partenaire::where('nom','like','%'.$search.'%')->orderBy('id')->paginate(5); 
            // }else{
            //     $PartenaireService = Partenaire::latest()->paginate(5);
            // }       
      
            // return view('PartenaireService.index',compact('PartenaireService'))
            //     ->with('i', (request()->input('page', 1) - 1) * 5);
            $Partenaire = Partenaire::all();
                // dd($Partenaire);
             return view('dashboard.partenaire.Liste_Partenaire_Service',compact('Partenaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PartenaireService.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=$request->validate([
        //     'nom' => 'required',
        //     'logo' => 'required',
        //     'service' => 'required',
        //     'cin' => 'required',
        //     'tel' => 'required',
        //     'adresse' => 'required',
           
        // ]);
        $data=$request->all();
        // dd($data);
        $Partenaire= new Partenaire();
        $Partenaire->nom = $data['nom'];
        if ($image = $request->file('logo')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $Partenaire->logo = "$profileImage";
        }
        $Partenaire->service = $data['service'];
        $Partenaire->cin = $data['cin'];
        $Partenaire->tel= $data['tel'];
        $Partenaire->adresse = $data['adresse'];
        $Partenaire->matricule = $data['matricule'];
        $Partenaire->region = $data['region'];
        $Partenaire->ville = $data['ville'];
        $Partenaire->postal = $data['postal'];
        $Partenaire->id_user = $data['id_user'];
        $Partenaire->pass = $data['pass'];
        
    //    dd($partenaire);
        $Partenaire->save();
   
        return redirect('/partenaire_service')->with('flash_message_success','partenaire  est ajouter .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PartenaireService  $PartenaireService
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $PartenaireService)
    {
        $PartenaireServices= Partenaire::find($PartenaireService);
        return view('PartenaireService.show',compact('PartenaireService','PartenaireServices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PartenaireService  $PartenaireService
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $detail=Partenaire::find($id);   
        return view('dashboard.partenaire.Edit_Service',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PartenaireService  $PartenaireService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $PartenaireService= Partenaire::find($id);
        if( $request->hasFile('logo')){
            $image_tmp=Input::file('logo');
            if($image_tmp->isValid()){
               $extension =$image_tmp->getClientOriginalExtension();
               $filename=rand(111,999).'.'.$extension;
               $destinationPath = 'img/';
               $image_tmp->move($destinationPath, $filename);
           
            }
           
            
            	$PartenaireService->service=$request->service;
            	$PartenaireService->nom=$request->nom;
            	$PartenaireService->cin=$request->cin;
            	$PartenaireService->tel=$request->tel;
            	$PartenaireService->adresse=$request->adresse;
            	$PartenaireService->logo=$filename;
                $PartenaireService->matricule =$request->matricule;
                $PartenaireService->region =$request->region;
                $PartenaireService->ville =$request->ville;
                $PartenaireService->postal =$request->postal;
                $PartenaireService->id_user =$request->id_user;
                $PartenaireService->pass =$request->pass;     
                $PartenaireService->update();
        }
    

    return redirect('/partenaire_service')->with('flash_message_success','Partenaire service  est bien  modifier ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartenaireService  $PartenaireService
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $Partenaire,$id)
    {
         $Partenaire=Partenaire::find($id);
        $Partenaire->delete();
  
        return redirect()->back()
                        ->with('flash_message_success','Partenaire service  est bien supprimer ');
    }
}
