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
        Schema::create('credits', function (Blueprint $table) {
            $table->id('credit_id');
            $table->string('credit_identifiant');
            $table->integer('credit_client');
            $table->integer('credit_agent');
            $table->integer('credit_montant');
            $table->integer('credit_acompte');
            $table->integer('credit_active');
            $table->integer('credit_termine');
            $table->string('credit_date_enreg');
            $table->integer('credit_art_livre');
            $table->string('credit_date_livre');
            $table->integer('credit_activ_livre');
            $table->integer('credit_livraison_etat');
            $table->integer('credit_livraison_dispo');
            $table->string('credit_agent_livre');
            $table->string('credit_date_vrais_livre');
            $table->integer('credit_etat');
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
