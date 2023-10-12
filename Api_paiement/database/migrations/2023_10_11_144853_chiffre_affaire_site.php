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
        Schema::create('chiffre_affaire_sites', function (Blueprint $table) {
            $table->id('site_cas');
            $table->integer('site_id_site');
            $table->integer('site_montant_encais');
            $table->integer('site_chiffre_generale');
            $table->integer('site_etat');
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
