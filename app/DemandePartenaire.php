<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandePartenaire extends Model
{
   protected $fillable = [
       'nom','type','cin','tel','adresse','gender','brith','email'
    ];
}
