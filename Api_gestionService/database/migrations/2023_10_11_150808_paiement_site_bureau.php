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
        Schema::create('paiement_site_bureaus', function (Blueprint $table) {
            $table->id('pb');
            $table->integer('paiement_id_site');
            $table->integer('paiement_id_chef_site');
            $table->integer('paiement_montant');
            $table->string('paiement_date');
            $table->integer('paiement_agent');
            $table->integer('paiement_etat');
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
