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
        Schema::create('article_a_credits', function (Blueprint $table) {
            $table->id('aac');
            $table->integer('aac_id_credits');
            $table->integer('aac_id_articles');
            $table->string('aac_nom_article');
            $table->integer('aac_prix_article');
            $table->integer('aac_livraison_art');
            $table->integer('aac_etat_article');
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
