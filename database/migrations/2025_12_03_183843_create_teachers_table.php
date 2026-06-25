<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('employee_code')->unique();
            $table->string('education_level'); // لیسانس، فوق‌لیسانس، دکترا
            $table->string('field_of_study')->nullable(); // رشته تحصیلی
            $table->string('university')->nullable();
            $table->json('certificates')->nullable(); // گواهینامه‌ها (CELTA, DELTA, etc.)
            $table->json('specializations')->nullable(); // تخصص‌ها
            $table->text('bio')->nullable();
            $table->integer('experience_years')->default(0);
            $table->decimal('hourly_rate', 10, 0)->nullable(); // نرخ ساعتی
            $table->decimal('monthly_salary', 12, 0)->nullable();
            $table->enum('employment_type', ['full_time', 'part_time', 'contract'])
                  ->default('part_time');
            $table->date('hire_date');
            $table->date('contract_end_date')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_name')->nullable();
            $table->json('available_days')->nullable(); // روزهای در دسترس
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        // جدول میانی برای سطوحی که معلم می‌تواند تدریس کند
        Schema::create('level_teacher', function (Blueprint $table) {
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->foreignId('level_id')->constrained()->onDelete('cascade');
            $table->primary(['teacher_id', 'level_id']);
        });

        // جدول میانی برای دوره‌هایی که معلم می‌تواند تدریس کند
        Schema::create('course_teacher', function (Blueprint $table) {
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->primary(['teacher_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_teacher');
        Schema::dropIfExists('level_teacher');
        Schema::dropIfExists('teachers');
    }
};