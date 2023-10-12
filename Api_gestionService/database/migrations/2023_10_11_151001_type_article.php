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
        Schema::create('type_articles', function (Blueprint $table) {
            $table->id('ta');
            $table->string('nom_type_a');
            $table->text('image_type_a');
            $table->text('description_type_a');
            $table->integer('etat_type_a');
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
