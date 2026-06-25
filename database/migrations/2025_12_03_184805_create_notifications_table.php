<?php
// database/migrations/2024_01_01_000018_create_institute_notifications_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('institute_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->enum('type', [
                'general',      // عمومی
                'class',        // کلاس
                'exam',         // آزمون
                'payment',      // پرداخت
                'event',        // رویداد
                'emergency'     // اضطراری
            ]);
            $table->enum('target', [
                'all',          // همه
                'students',     // دانش‌آموزان
                'teachers',     // معلمان
                'specific'      // خاص
            ]);
            $table->foreignId('class_room_id')->nullable()
                  ->constrained()->nullOnDelete(); // برای اعلان‌های کلاس خاص
            $table->json('target_users')->nullable(); // آی‌دی کاربران خاص
            $table->boolean('send_sms')->default(false);
            $table->boolean('send_email')->default(false);
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        // جدول خوانده شدن اعلان‌ها
        Schema::create('notification_reads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notification_id')
                  ->constrained('institute_notifications')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamp('read_at');
            
            $table->unique(['notification_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notification_reads');
        Schema::dropIfExists('institute_notifications');
    }
};