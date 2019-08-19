<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            //cle etrongé de tabla categorie 
            $table->unsignedInteger('sous_categorie_id');
            $table->foreign('sous_categorie_id')->references('id')
                                                ->on('sous_categories')
                                                ->onDelete('restrict')
                                                ->onUpdate('restrict');
            //cle etrongé de table user (depanneur)
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')
                                      ->on('users')
                                      ->onDelete('restrict')
                                      ->onUpdate('restrict');


            $table->string('titre_service');
            $table->string('detaille_service');
            $table->string('tempt_service');
            $table->string('photo_service');
            $table->integer('adresse_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function(Blueprint $table) {
            $table->dropForeign('services_user_id_foreign');
        });
        Schema::drop('services');



        
    }
}
