<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandePartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_partenaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('email');
            $table->string('service');
            $table->string('cin');
            $table->string('tel');
            $table->string('gender');
            $table->string('brith');
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
        Schema::dropIfExists('demande_partenaires');
    }
}
