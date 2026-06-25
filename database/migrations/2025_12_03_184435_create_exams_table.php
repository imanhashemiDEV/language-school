<?php
// database/migrations/2024_01_01_000013_create_exams_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('class_room_id')->constrained()->onDelete('cascade');
            $table->enum('type', [
                'quiz',         // کوئیز
                'midterm',      // میان‌ترم
                'final',        // پایان‌ترم
                'placement',    // تعیین سطح
                'mock',         // آزمون آزمایشی
                'speaking',     // آزمون اسپیکینگ
                'writing'       // آزمون رایتینگ
            ]);
            $table->date('date');
            $table->time('start_time');
            $table->integer('duration_minutes');
            $table->decimal('total_score', 5, 2)->default(100);
            $table->decimal('passing_score', 5, 2)->default(60);
            $table->text('description')->nullable();
            $table->text('topics')->nullable(); // مباحث آزمون
            $table->boolean('is_online')->default(false);
            $table->enum('status', [
                'scheduled',    // برنامه‌ریزی شده
                'in_progress',  // در حال برگزاری
                'completed',    // برگزار شده
                'cancelled'     // لغو شده
            ])->default('scheduled');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};