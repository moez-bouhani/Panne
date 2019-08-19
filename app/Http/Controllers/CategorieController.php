<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function save_categorie_servi_depanneur(Request $request)
    {
        $cat = new Categorie();
        $cat->nom_categorie  = $request->nom_categorie ;
        


         $cat->save();

      return response()->json('categorie ajouter avec succes !');
    }
}
