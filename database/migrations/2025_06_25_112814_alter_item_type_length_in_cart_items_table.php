<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::table('cart_items', function (Blueprint $table) {
        $table->string('item_type', 255)->change();
    });
}

public function down()
{
    Schema::table('cart_items', function (Blueprint $table) {
        $table->string('item_type')->change(); // أو الطول الأصلي
    });
}

};
