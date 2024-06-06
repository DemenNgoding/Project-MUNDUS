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
        Schema::create('users_community', function (Blueprint $table) {
            $table->string('user_id'); // akan di review selanjutnya untuk composite key
            $table->string('community_id'); // akan di review selanjutnya untuk composite key
            $table->date('join_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_community');
    }
};
