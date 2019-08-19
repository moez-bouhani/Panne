<?php

use Illuminate\Http\Request;


//route API pour admin -panneur -depanneur
Route::prefix('auth')->group(function () {
    Route::post('registerAdmin', 'AuthController@registerAdmin');
    Route::post('registerDepanneur', 'AuthController@registerDepanneur');
    Route::post('registerPanneur', 'AuthController@registerPanneur');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');
     
    
    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});


Route::group(['middleware' => 'auth:api'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
});


//Route CRUDE  Contact panneur avec leur role 1
Route::prefix('contactPanneur')->group(function () {


    Route::post('/save-contact-panneur', 'ContactController@save_contact_panneur');



    Route::get('/affiche-contact-panneur/{id}', 'ContactController@affiche_contact_panneur');//get panneur selon id 
    Route::post('/update-contact-panneur/{id}', 'ContactController@update_contact_panneur');
    Route::delete('/del-contact-panneur/{id}', 'ContactController@del_contact_panneur');
  

});
//route afficher toute les liste de contact (panneur et depanneur)

Route::get('/contacts', 'ContactController@contacts');

//Route CRUDE  Contact depanneur avec leur role 2
Route::prefix('contactDepanneur')->group(function () {


    Route::post('/save-contact-depanneur', 'ContactController@save_contact_depanneur');



    Route::get('/affiche-contact-depanneur/{id}', 'ContactController@affiche_contact_depanneur');//get depanneur selon id 
    Route::post('/update-contact-depanneur/{id}', 'ContactController@update_contact_depanneur');
    Route::delete('/del-contact-depanneur/{id}', 'ContactController@del_contact_depanneur');
   

});

//Route CRUDE  service depanneur avec leur role 2
Route::prefix('serviceDepanneur')->group(function () {


    Route::post('/save_service_depanneur', 'ServiceController@save_service_depanneur');



    Route::get('/affiche_Service_depanneur/{id}', 'ServiceController@affiche_Service_depanneur');//get service selon id 
    Route::post('/update_Service_depanneur/{id}', 'ServiceController@update_Service_depanneur');
    Route::delete('/del_Service_depanneur/{id}', 'ServiceController@del_Service_depanneur');
   
    Route::get('/Services', 'ServiceController@Services');

});

//Route CRUDE  categorie depanneur avec leur role 2
Route::prefix('catDepanneur')->group(function () {


    Route::post('/save-contact-save_categorie_servi_depanneur', 'CategorieController@save_categorie_servi_depanneur');
});

  //Route CRUDE  sous_categorie depanneur avec leur role 2
Route::prefix('SousCatDepanneur')->group(function () {


    Route::post('/save-contact-save_sous_categorie_depanneur', 'Sous_categorieController@save_sous_categorie_depanneur');
});
  


   

