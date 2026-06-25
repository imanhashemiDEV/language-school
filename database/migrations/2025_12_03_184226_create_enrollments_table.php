<?php
// database/migrations/2024_01_01_000010_create_enrollments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_room_id')->constrained()->onDelete('cascade');
            $table->date('enrollment_date');
            $table->decimal('original_price', 12, 0); // قیمت اصلی
            $table->decimal('discount_amount', 12, 0)->default(0);
            $table->string('discount_reason')->nullable();
            $table->decimal('final_price', 12, 0); // قیمت نهایی
            $table->decimal('paid_amount', 12, 0)->default(0); // مبلغ پرداخت شده
            $table->enum('payment_status', [
                'pending',      // در انتظار پرداخت
                'partial',      // پرداخت جزئی
                'paid',         // پرداخت کامل
                'refunded'      // بازپرداخت شده
            ])->default('pending');
            $table->enum('status', [
                'active',       // فعال
                'completed',    // تکمیل شده
                'dropped',      // انصراف
                'transferred',  // انتقالی
                'failed'        // مردود
            ])->default('active');
            $table->decimal('final_score', 5, 2)->nullable(); // نمره نهایی
            $table->text('notes')->nullable();
            $table->foreignId('registered_by')->nullable()
                  ->constrained('users')->nullOnDelete(); // کی ثبت‌نام کرده
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['student_id', 'class_room_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};