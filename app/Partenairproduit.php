<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenairproduit extends Model
{
      protected $fillable = [
        'nom','logo','service','cin','tel','adresse','matricule','region','ville','postal','id_user','pass'
    ];
}
