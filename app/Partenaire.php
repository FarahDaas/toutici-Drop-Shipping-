<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
     protected $table = 'partenaires';
    protected $fillable = [
        'nom','logo','service','cin','tel','adresse','matricule','region','ville','postal','id_user','pass'
    ];
    public function Commande(){
        return $this->hasMany(commande::class , 'partenaires_id' , 'id');
}

}
