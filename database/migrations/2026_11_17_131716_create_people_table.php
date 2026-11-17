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
        Schema::create('people', function (Blueprint $table) {
    		$table->id();
    		$table->string('name');
    		$table->enum('type', ['Intern', 'Attachee']);
    		$table->enum('gender', ['Male', 'Female'])->nullable();
    		$table->string('national_id', 10)->unique();
    		$table->string('phone', 20);
    		$table->string('email');
    		$table->string('department_code', 10);
    		$table->string('institution')->nullable();
    		$table->string('area_of_study');
    		$table->date('start_date');
    		$table->date('end_date');
    		$table->string('bank_name')->nullable();
    		$table->text('account_number')->nullable(); // Text type supports encrypted values
    		$table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
    		$table->timestamps();
    		$table->softDeletes(); // Supports archival/recovery per Section 8

    // Foreign key & performance indexes
    $table->foreign('department_code')->references('code')->on('departments')->restrictOnDelete();
    $table->index(['name', 'type', 'department_code']);
    $table->index(['start_date', 'end_date']);
	});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
