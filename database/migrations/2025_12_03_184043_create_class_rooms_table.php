<?php
// database/migrations/2024_01_01_000008_create_class_rooms_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // نام کلاس
            $table->string('code')->unique(); // CLS-1403-001
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('term_id')->constrained()->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('level_id')->constrained()->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->json('days_of_week'); // ["saturday", "monday", "wednesday"]
            $table->integer('capacity');
            $table->integer('min_capacity')->default(5);
            $table->decimal('price', 12, 0); // قیمت این کلاس خاص
            $table->enum('status', [
                'pending',      // در انتظار
                'confirmed',    // تایید شده
                'in_progress',  // در حال برگزاری
                'completed',    // تکمیل شده
                'cancelled'     // لغو شده
            ])->default('pending');
            $table->boolean('is_online')->default(false);
            $table->string('online_link')->nullable(); // لینک کلاس آنلاین
            $table->string('online_platform')->nullable(); // Adobe Connect, Skyroom, etc.
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // ایندکس‌ها
            $table->index(['start_date', 'end_date']);
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_rooms');
    }
};