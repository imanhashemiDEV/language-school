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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // کلاس 101
            $table->string('code')->unique();
            $table->integer('capacity');
            $table->integer('floor')->default(1);
            $table->boolean('has_projector')->default(false);
            $table->boolean('has_whiteboard')->default(true);
            $table->boolean('has_audio_system')->default(false);
            $table->boolean('has_ac')->default(false);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
