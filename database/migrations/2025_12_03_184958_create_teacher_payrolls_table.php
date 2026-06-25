<?php
// database/migrations/2024_01_01_000020_create_teacher_payrolls_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teacher_payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade');
            $table->integer('year');
            $table->integer('month');
            $table->integer('total_hours')->default(0);
            $table->integer('total_sessions')->default(0);
            $table->decimal('hourly_rate', 10, 0);
            $table->decimal('base_amount', 12, 0); // مبلغ پایه
            $table->decimal('bonus', 12, 0)->default(0);
            $table->decimal('deductions', 12, 0)->default(0);
            $table->text('deduction_reason')->nullable();
            $table->decimal('total_amount', 12, 0);
            $table->enum('status', [
                'pending',
                'approved',
                'paid',
                'cancelled'
            ])->default('pending');
            $table->date('payment_date')->nullable();
            $table->string('payment_reference')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('approved_by')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->unique(['teacher_id', 'year', 'month']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacher_payrolls');
    }
};