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
        Schema::create('community', function (Blueprint $table) {
            $table->id('community_id')->autoIncrement()->index()->primary();
            $table->string('community_name');
            $table->string('category');
            $table->integer('members');
            $table->unsignedInteger('creator_id');
            $table->text('description');
            $table->string('city');
            $table->date('date_created');
            $table->timestamps();

            $table->foreign('creator_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community');
    }
};
