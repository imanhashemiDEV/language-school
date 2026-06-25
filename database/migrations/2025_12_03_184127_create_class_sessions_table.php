<?php
// database/migrations/2024_01_01_000009_create_class_sessions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_room_id')->constrained()->onDelete('cascade');
            $table->integer('session_number'); // شماره جلسه
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('title')->nullable(); // عنوان جلسه
            $table->text('topics_covered')->nullable(); // مباحث تدریس شده
            $table->text('homework')->nullable(); // تکلیف
            $table->text('notes')->nullable(); // یادداشت معلم
            $table->enum('status', [
                'scheduled',    // برنامه‌ریزی شده
                'held',         // برگزار شده
                'cancelled',    // لغو شده
                'postponed'     // به تعویق افتاده
            ])->default('scheduled');
            $table->string('cancellation_reason')->nullable();
            $table->date('postponed_to')->nullable();
            $table->boolean('is_makeup_session')->default(false); // جلسه جبرانی
            $table->timestamps();

            $table->unique(['class_room_id', 'session_number']);
            $table->index('date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_sessions');
    }
};