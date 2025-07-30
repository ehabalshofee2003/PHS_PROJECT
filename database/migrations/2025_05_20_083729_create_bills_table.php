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
 Schema::create('bills', function (Blueprint $table) {
    $table->id();
    $table->string('bill_number')->unique();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->decimal('total_amount', 10, 2);
    $table->enum('status', ['pending', 'sent'])->default('pending' );
    $table->timestamp('sent_at')->nullable(); // وقت الإرسال للإدارة
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
