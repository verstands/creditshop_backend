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
        Schema::create('parametres', function (Blueprint $table) {
            $table->id('pt');
            $table->integer('parametre_taux_echange');
            $table->integer('parametre_pc_AchatCredit');
            $table->integer('parametre_commission_agent');
            $table->integer('parametre_commission_sts');
            $table->integer('parametres_delai_paie');
            $table->integer('parametres_echance_paie');
            $table->integer('parametre_etat');
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
