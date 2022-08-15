<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenairproduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenairproduits', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nom');
            $table->text('logo');
            $table->string('service');
            $table->string('cin');
            $table->string('tel');
            $table->text('adresse');
        
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
        Schema::dropIfExists('partenairproduits');
    }
}
