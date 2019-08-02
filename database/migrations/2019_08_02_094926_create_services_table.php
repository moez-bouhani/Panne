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
            $table->unsignedInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            //cle etrongé de table user (depanneur)
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titre_service');
            $table->string('detaille_service');
            $table->string('tempt_service');
            $table->string('photo_service');
            $table->integer('code_postale');
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
        Schema::dropIfExists('services');
    }
}
