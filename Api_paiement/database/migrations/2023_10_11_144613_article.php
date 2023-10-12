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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('articles_id');
            $table->string('article_nom');
            $table->string('article_marque');
            $table->text('article_image');
            $table->text('article_image2');
            $table->text('article_image3');
            $table->integer('article_catheg1');
            $table->integer('article_catheg2');
            $table->text('article_description');
            $table->integer('article_prix');
            $table->integer('article_stock');
            $table->integer('article_etatt');
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
