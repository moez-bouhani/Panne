<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['categorie_id','titre_service' ,'user_id',
     'detaille_service', 'tempt_service', 'photo_service', 'code_postal' 
];
}
