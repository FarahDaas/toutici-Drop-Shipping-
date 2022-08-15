<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
           
            $table->unsignedInteger('partenaires_id')->index();
            $table->string('nomclient');
            $table->string('tel');
            $table->string('region');
            $table->string('ville');
            $table->string('adresse');
            $table->string('postal');
            $table->double('net');
            $table->string('code_commande');
            $table->double('promo');
            $table->double('total');
            $table->foreign('partenaires_id')->references('id')->on('partenaires')->onDelete('cascade');
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
        Schema::drop('commandes');
    }
}
