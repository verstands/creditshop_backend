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
        Schema::create('notification_clients', function (Blueprint $table) {
            $table->id('notif_id');
            $table->string('notif_recever');
            $table->string('notif_sender');
            $table->text('notif_message');
            $table->string('notif_date');
            $table->integer('notif_vu_client');
            $table->integer('etat_notif');
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
