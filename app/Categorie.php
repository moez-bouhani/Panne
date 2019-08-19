<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['nom_categorie'
 
];
 
public function sousCategories(){
    return $this->hasMany(App\SousCategorie::class);

}

}
