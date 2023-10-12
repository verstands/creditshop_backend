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
        Schema::create('historique_livraisons', function (Blueprint $table) {
            $table->id('hl');
            $table->integer('histo_livr_client');
            $table->string('histo_livr_agent');
            $table->integer('histo_livr_clredit');
            $table->string('histo_livr_date');
            $table->integer('histo_livr_vu');
            $table->integer('histo_livr_etat');
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
