<?php
// database/migrations/2024_01_01_000019_create_placement_tests_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('placement_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->date('test_date');
            $table->foreignId('examiner_id')->nullable()
                  ->constrained('teachers')->nullOnDelete();
            
            // نمرات بخش‌های مختلف
            $table->decimal('grammar_score', 5, 2)->nullable();
            $table->decimal('vocabulary_score', 5, 2)->nullable();
            $table->decimal('reading_score', 5, 2)->nullable();
            $table->decimal('listening_score', 5, 2)->nullable();
            $table->decimal('speaking_score', 5, 2)->nullable();
            $table->decimal('writing_score', 5, 2)->nullable();
            $table->decimal('total_score', 5, 2)->nullable();
            
            $table->foreignId('recommended_level_id')->nullable()
                  ->constrained('levels')->nullOnDelete();
            $table->text('examiner_notes')->nullable();
            $table->text('student_goals')->nullable(); // اهداف دانش‌آموز
            $table->text('recommendations')->nullable();
            $table->enum('status', [
                'scheduled',
                'completed',
                'cancelled'
            ])->default('scheduled');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('placement_tests');
    }
};