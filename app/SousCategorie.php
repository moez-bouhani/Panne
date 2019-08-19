<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $fillable = ['nom_sous_categorie','categorie_id'
 
];
public function services() 
{
    return $this->hasMany(\App\Service::class);
}

public function categorie() 
    {
        return $this->belongsTo(\App\Categorie::class);
    }
}
