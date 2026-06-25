<?php
// database/migrations/2024_01_01_000014_create_exam_results_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained()->onDelete('cascade');
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->decimal('score', 5, 2)->nullable();
            $table->decimal('listening_score', 5, 2)->nullable();
            $table->decimal('reading_score', 5, 2)->nullable();
            $table->decimal('writing_score', 5, 2)->nullable();
            $table->decimal('speaking_score', 5, 2)->nullable();
            $table->decimal('grammar_score', 5, 2)->nullable();
            $table->decimal('vocabulary_score', 5, 2)->nullable();
            $table->boolean('is_passed')->nullable();
            $table->enum('status', [
                'pending',      // در انتظار نمره
                'graded',       // نمره‌گذاری شده
                'absent',       // غایب
                'cheating'      // تقلب
            ])->default('pending');
            $table->text('teacher_feedback')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique(['exam_id', 'enrollment_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};