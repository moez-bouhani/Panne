<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['sous_categorie_id','titre_service' ,'user_id',
     'detaille_service', 'tempt_service', 'photo_service', 'code_postal' 
];

public function user(){
    return $this->belongsTo(App\User::class);

}

public function sousCategorie(){
    return $this->belongsTo(App\SousCategorie::class);

}
 

}
