<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sous_categorie;

class Sous_categorieController extends Controller
{
    

    public function save_sous_categorie_depanneur(Request $request)
    {
        $scat = new Sous_categorie();
        $scat->nom_sous_categorie  = $request->nom_sous_categorie ;
    
        
        
       
        
        //appel categorie_id de la table categorie
        $scat = array_merge($request->all(), ['categorie_id ' => $request->categorie()->id]);


         $scat->save();

      return response()->json('sous categorie ajouter avec succes !');
    }



}
