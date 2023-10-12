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
        Schema::create('achat_credits', function (Blueprint $table) {
            $table->id('ac');
            $table->integer('client_ac');
            $table->integer('montant_ac');
            $table->integer('payer_ac');
            $table->integer('etat_ac');
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
