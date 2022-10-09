<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->integer('qte');
            $table->float('prix');
            $table->string('nom');
            $table->string('email');
            $table->string('adresse');
            $table->string('fournisseur')->default("");
            $table->string('tel');
            $table->integer('paye')->default(0);
            $table->integer('pickup')->default(0);
            $table->integer('stat')->default(0);
            $table->integer('confirm')->default(0);
            $table->string('region')->default("");
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
        Schema::dropIfExists('colis');
    }
}
