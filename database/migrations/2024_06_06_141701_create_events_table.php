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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id')->index()->primary()->autoIncrement();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('community_id');
            $table->string('event_name');
            $table->string('content'); // berupa link nanti di cek lagi
            $table->string('location'); // akan connect ke google akan di cek nanti
            $table->text('caption');
            $table->date('date');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('community_id')->references('community_id')->on('community');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
