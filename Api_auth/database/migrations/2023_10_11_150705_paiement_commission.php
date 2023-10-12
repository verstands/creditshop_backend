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
        Schema::create('paiement_commissions', function (Blueprint $table) {
            $table->id('pc');
            $table->integer('paiement_agent_site');
            $table->integer('paiement_montant');
            $table->string('paiement_date');
            $table->string('paiement_agent_chef');
            $table->integer('paiement_vu_admin');
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
