<?php
// database/migrations/2024_01_01_000016_create_certificates_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_number')->unique();
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->enum('type', [
                'completion',   // گواهی پایان دوره
                'attendance',   // گواهی حضور
                'achievement',  // گواهی موفقیت
                'level'         // گواهی سطح
            ]);
            $table->date('issue_date');
            $table->date('expiry_date')->nullable();
            $table->decimal('final_score', 5, 2)->nullable();
            $table->string('grade')->nullable(); // A, B, C or Excellent, Good, etc.
            $table->string('level_achieved')->nullable();
            $table->string('file_path')->nullable();
            $table->string('qr_code')->nullable();
            $table->boolean('is_printed')->default(false);
            $table->date('printed_at')->nullable();
            $table->foreignId('issued_by')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};