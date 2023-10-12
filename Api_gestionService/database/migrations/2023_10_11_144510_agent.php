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
        Schema::create('agents', function (Blueprint $table) {
            $table->id('ag');
            $table->string('agents_nom');
            $table->string('agents_postnom');
            $table->string('agents_prenom');
            $table->string('agents_sexe');
            $table->string('agents_serie');
            $table->string('agents_mdp');
            $table->string('agents_tel');
            $table->string('agents_adresse');
            $table->integer('agents_site');
            $table->integer('agents_commission');
            $table->integer('agents_fonction');
            $table->integer('agents_etat');
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
