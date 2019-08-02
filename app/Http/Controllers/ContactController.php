<?php
namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Resources\ContactCollection;
class ContactController extends Controller
{
    public function save_contact_panneur(Request $request)
    {
        $cont = new Contact();
        $cont->nom = $request->nom;
        $cont->email = $request->email;
        $cont->phone = $request->phone;
        $cont->message = $request->message;
        $cont->role = 1;
 
         $cont->save();

      return response()->json('contact ajouter avec succes !');
    }

   //afficher tous les contacts

    public function contacts()
    {
      return new ContactCollection(Contact::all());
    }

    public function affiche_contact_panneur($id)
    {
      $cont = Contact::find($id);
      return response()->json($cont);
    }

    public function update_contact_panneur($id, Request $request)
    {
      $cont = Contact::find($id);

      $cont->update($request->all());

      return response()->json('contact modifier avec succes !');
    }

    public function del_contact_panneur($id)
    {
      $cont = Contact::find($id);

      $cont->delete();

      return response()->json('contact supprimer avec succes !');
    }

//Crud depanneur avec leur role 1

public function save_contact_depanneur(Request $request)
    {
        $cont = new Contact();
        $cont->nom = $request->nom;
        $cont->email = $request->email;
        $cont->phone = $request->phone;
        $cont->message = $request->message;
        $cont->role = 2;
 
         $cont->save();

      return response()->json('contact ajouter avec succes !');
    }

    

    public function affiche_contact_depanneur($id)
    {
      $cont = Contact::find($id);
      return response()->json($cont);
    }

    public function update_contact_depanneur($id, Request $request)
    {
      $cont = Contact::find($id);

      $cont->update($request->all());

      return response()->json('contact modifier avec succes !');
    }

    public function del_contact_depanneur($id)
    {
      $cont = Contact::find($id);

      $cont->delete();

      return response()->json('contact supprimer avec succes !');
    }
}