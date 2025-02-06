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
        Schema::create('botusers', function (Blueprint $table) {
            //
            $table->bigInteger('id_usuario')->unique('sk_id_usuario');
            $table->string('first_name');
            //
            $table->string('username')->nullable();
            $table->boolean('is_premium')->nullable();
            $table->boolean('sw_ban')->default(false);
            //
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botusers');
    }
};
