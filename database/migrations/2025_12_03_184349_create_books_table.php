<?php
// database/migrations/2024_01_01_000012_create_books_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->string('edition')->nullable();
            $table->year('publication_year')->nullable();
            $table->foreignId('level_id')->nullable()->constrained()->nullOnDelete();
            $table->enum('type', [
                'student_book',  // کتاب دانش‌آموز
                'workbook',      // کتاب تمرین
                'teacher_book',  // کتاب معلم
                'audio_cd',      // سی‌دی صوتی
                'flashcard',     // فلش کارت
                'supplementary'  // کمک آموزشی
            ]);
            $table->decimal('price', 10, 0)->nullable();
            $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // جدول میانی کتاب‌ها و دوره‌ها
        Schema::create('book_course', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->boolean('is_required')->default(true);
            $table->primary(['book_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_course');
        Schema::dropIfExists('books');
    }
};