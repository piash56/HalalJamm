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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');
            $table->string('food_name');
            $table->string('food_image')->nullable();
            $table->decimal('food_price', 10, 2);
            $table->integer('quantity');
            $table->text('addons')->nullable(); // JSON field for addons
            $table->text('special_instructions')->nullable();
            $table->decimal('item_total', 10, 2); // price * quantity + addons
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
