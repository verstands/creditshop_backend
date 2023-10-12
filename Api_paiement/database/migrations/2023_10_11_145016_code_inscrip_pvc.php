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
        Schema::create('code_inscrip_pvcs', function (Blueprint $table) {
            $table->id('ipvc');
            $table->string('code_vendeur');
            $table->string('code_agent');
            $table->string('code_code');
            $table->string('code_date');
            $table->integer('code_etat');
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
