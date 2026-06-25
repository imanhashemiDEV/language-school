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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('code')->unique(); // کد دوره
            $table->enum('type', [
                'general',      // زبان عمومی
                'ielts',        // آیلتس
                'toefl',        // تافل
                'conversation', // مکالمه
                'business',     // تجاری
                'kids',         // کودکان
                'grammar',      // گرامر
                'speaking',     // اسپیکینگ
                'writing',      // رایتینگ
                'reading',      // ریدینگ
                'listening'     // لیسنینگ
            ]);
            $table->foreignId('level_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->text('objectives')->nullable(); // اهداف دوره
            $table->text('prerequisites')->nullable(); // پیش‌نیازها
            $table->integer('duration_hours'); // مدت زمان به ساعت
            $table->integer('sessions_count'); // تعداد جلسات
            $table->decimal('price', 12, 0); // قیمت (تومان)
            $table->decimal('discount_percent', 5, 2)->default(0);
            $table->string('image')->nullable();
            $table->integer('capacity')->default(15); // ظرفیت پیش‌فرض
            $table->boolean('is_online')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
