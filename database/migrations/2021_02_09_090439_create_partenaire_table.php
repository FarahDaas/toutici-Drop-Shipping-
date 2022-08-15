<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('logo');
            $table->string('service');
            $table->string('cin');
            $table->string('tel');
            $table->text('adresse');
            $table->string('matricule');
            $table->string('region');
            $table->string('ville');
            $table->string('postal');
            $table->string('pass');
            $table->integer('id_user');
            
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
        Schema::dropIfExists('partenaires');
        
    }
}
