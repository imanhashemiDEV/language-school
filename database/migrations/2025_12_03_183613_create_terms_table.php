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
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // ترم بهار 1403
            $table->string('code')->unique(); // T-1403-01
            $table->date('start_date');
            $table->date('end_date');
            $table->date('registration_start');
            $table->date('registration_end');
            $table->enum('status', ['upcoming', 'registration', 'active', 'finished'])
                  ->default('upcoming');
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
