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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('client_nom');
            $table->string('client_post');
            $table->string('client_prenom');
            $table->string('client_profil');
            $table->string('client_carte');
            $table->text('client_adresse');
            $table->string('client_commune');
            $table->string('client_tel');
            $table->string('client_mdp');
            $table->integer('client_activation');
            $table->string('client_agent_activa');
            $table->string('client_date_creation');
            $table->string('client_agent');
            $table->integer('client_etat');
            $table->string('client_province');
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
