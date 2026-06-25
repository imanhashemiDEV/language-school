<?php
// database/migrations/2024_01_01_000007_create_students_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('student_code')->unique(); // کد دانش‌آموزی
            $table->foreignId('current_level_id')->nullable()
                  ->constrained('levels')->nullOnDelete();
            $table->date('registration_date');
            $table->string('parent_name')->nullable(); // برای دانش‌آموزان کودک
            $table->string('parent_mobile')->nullable();
            $table->string('parent_relation')->nullable(); // پدر، مادر، قیم
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->text('medical_conditions')->nullable(); // شرایط پزشکی
            $table->text('notes')->nullable();
            $table->enum('source', [ // نحوه آشنایی
                'website',
                'instagram',
                'telegram',
                'friend',
                'advertisement',
                'other'
            ])->nullable();
            $table->decimal('wallet_balance', 12, 0)->default(0); // موجودی کیف پول
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};