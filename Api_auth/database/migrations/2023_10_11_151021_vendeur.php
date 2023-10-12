<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id('vd');
            $table->string('vendeur_nom');
            $table->string('vendeur_prop1');
            $table->string('vendeur_prop2');
            $table->string('vendeur_prop3');
            $table->string('vendeur_tel');
            $table->string('vendeur_mdp');
            $table->integer('vendeur_activite');
            $table->string('vendeur_nom_activ');
            $table->integer('vendeur_solde');
            $table->string('vendeur_signature');
            $table->string('vendeur_parcelle');
            $table->string('vendeur_avenue');
            $table->string('vendeur_quartier');
            $table->string('vendeur_commune');
            $table->string('vendeur_ville');
            $table->string('vendeur_province');
            $table->string('vendeur_pays');
            $table->integer('vendeur_activation');
            $table->string('vendeur_date');
            $table->integer('vendeur_agent');
            $table->integer('vendeur_etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
