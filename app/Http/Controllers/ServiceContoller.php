<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function save_service_depanneur(Request $request)
    {
        $serv = new Service();
        $serv->titre_service = $request->titre_service;
        $serv->detaille_service = $request->detaille_service;
        $serv->tempt_service = $request->tempt_service;
        $serv->photo_service = $request->photo_service;
        $serv->adresse_service = $request->adresse_service;
        
        
        //appel user_id de la table user
        $inputs  = array_merge($request->all(), ['user_id' => $request->user()->id]);
        
        //appel categorie_id de la table categorie
        $inputs  = array_merge($request->all(), ['categorie_id ' => $request->categorie()->id]);


         $serv->save();

      return response()->json('Service ajouter avec succes !');
    }

   //afficher tous les contacts

    public function Services()
    {
      return new ServiceCollection(Service::all());
    }

    public function affiche_Service_depanneur($id)
    {
      $serv = Service::find($id);
      return response()->json($serv);
    }

    public function update_Service_depanneur($id, Request $request)
    {
      $serv = Service::find($id);

      $serv->update($request->all());

      return response()->json('Service modifier avec succes !');
    }

    public function del_Service_depanneur($id)
    {
      $serv = Service::find($id);

      $serv->delete();

      return response()->json('Service supprimer avec succes !');
    }


}
