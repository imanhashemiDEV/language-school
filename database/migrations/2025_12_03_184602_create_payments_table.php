<?php
// database/migrations/2024_01_01_000015_create_payments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('enrollment_id')->nullable()
                  ->constrained()->nullOnDelete();
            $table->decimal('amount', 12, 0);
            $table->enum('type', [
                'tuition',      // شهریه
                'book',         // کتاب
                'exam',         // آزمون
                'registration', // ثبت‌نام
                'certificate',  // گواهینامه
                'penalty',      // جریمه
                'other'         // سایر
            ]);
            $table->enum('method', [
                'cash',         // نقدی
                'card',         // کارت
                'transfer',     // انتقال بانکی
                'online',       // درگاه آنلاین
                'cheque',       // چک
                'installment',  // قسطی
                'wallet'        // کیف پول
            ]);
            $table->enum('status', [
                'pending',      // در انتظار
                'completed',    // تکمیل شده
                'failed',       // ناموفق
                'refunded',     // بازپرداخت
                'cancelled'     // لغو شده
            ])->default('pending');
            $table->string('reference_number')->nullable(); // شماره پیگیری
            $table->string('bank_name')->nullable();
            $table->string('card_number')->nullable(); // 4 رقم آخر
            $table->string('receipt_image')->nullable();
            $table->text('description')->nullable();
            $table->date('payment_date');
            $table->date('due_date')->nullable(); // موعد پرداخت
            $table->foreignId('received_by')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();

            $table->index('payment_date');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};