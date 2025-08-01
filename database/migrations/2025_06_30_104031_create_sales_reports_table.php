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
       Schema::create('sales_reports', function (Blueprint $table) {
    $table->id();
    $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
    $table->enum('report_type', ['daily', 'weekly', 'monthly']);
    $table->decimal('total_sales', 15, 2);
    $table->decimal('total_income', 15, 2);
    $table->string('top_medicine');
    $table->integer('total_bills');
    $table->text('notes')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_reports');
    }
};
