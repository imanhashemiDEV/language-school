<?php
// database/migrations/2024_01_01_000011_create_attendances_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_session_id')->constrained()->onDelete('cascade');
            $table->enum('status', [
                'present',      // حاضر
                'absent',       // غایب
                'late',         // تاخیر
                'excused',      // غیبت موجه
                'early_leave'   // ترک زودهنگام
            ])->default('present');
            $table->time('arrival_time')->nullable();
            $table->time('leave_time')->nullable();
            $table->integer('late_minutes')->default(0);
            $table->text('notes')->nullable();
            $table->foreignId('marked_by')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->unique(['enrollment_id', 'class_session_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};