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
        Schema::create('historique_achat_credits', function (Blueprint $table) {
            $table->id('ha');
            $table->string('historique_client');
            $table->string('historique_vendeur');
            $table->string('historique_montant');
            $table->string('historique_date');
            $table->string('historique_etat');
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
