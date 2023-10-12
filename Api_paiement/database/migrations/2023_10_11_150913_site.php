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
        Schema::create('sites', function (Blueprint $table) {
            $table->id('st');
            $table->string('site_nom_site');
            $table->text('site_description_site');
            $table->string('site_quartier_site');
            $table->string('site_commune_site');
            $table->string('site_ville_site');
            $table->string('site_province_site');
            $table->string('site_pays_site');
            $table->integer('site_recette_jour_site');
            $table->integer('site_chiffre_affaire_site');
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
