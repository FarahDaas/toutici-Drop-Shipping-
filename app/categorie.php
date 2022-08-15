<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'nom', 'parent_id','description','url','status','icon'
    ];
    public function subcategory()
    {
        return $this->hasMany(\App\categorie::class, 'parent_id');
    }
public function childs()
    {
        return $this->hasMany(\App\categorie::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(\App\categorie::class, 'parent_id');
    }
}
