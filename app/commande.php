<?php

namespace App;

use App\Partenaire;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    
    protected $fillable = [
        'nomclient', 'tel','region','ville','adresse','postal','net','promo','total','etat','Partenaire','code_commande','type_promo','partenaires_id'
    ];

    public function produits(){
    	return $this->hasMany('App\produit_commander','id_commande');
    }
    public function Partenaire(){
        return $this->belongsTo(Partenaire::class , 'partenaires_id' , 'id');
     }
    
     
}
