<?php

use Illuminate\Http\Request;


//route API pour admin -panneur -depanneur
Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
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

//Route CRUDE  Contact panneur avec leur role 1
Route::prefix('contactDepanneur')->group(function () {


    Route::post('/save-contact-depanneur', 'ContactController@save_contact_depanneur');



    Route::get('/affiche-contact-depanneur/{id}', 'ContactController@affiche_contact_depanneur');//get depanneur selon id 
    Route::post('/update-contact-depanneur/{id}', 'ContactController@update_contact_depanneur');
    Route::delete('/del-contact-depanneur/{id}', 'ContactController@del_contact_depanneur');
   

});
    


   

