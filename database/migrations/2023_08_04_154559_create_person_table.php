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
        Schema::create('users_main', function (Blueprint $table) {
            $table->ulid("id")->unique()->primary();
            $table->string("username", 50);
            $table->string("email", 100)->unique();
            $table->string("password", 100);
            $table->string("country", 20)->default("Nigeria");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_main');
    }
};
