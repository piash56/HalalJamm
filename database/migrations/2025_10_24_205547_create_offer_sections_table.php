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
        Schema::create('offer_sections', function (Blueprint $table) {
            $table->id();
            $table->string('small_image')->nullable(); // delicious.png
            $table->string('primary_text'); // "Special deal offer every weekend"
            $table->string('secondary_text'); // "grilled chicken shawarma"
            $table->decimal('secondary_price', 10, 2)->nullable(); // 8.25
            $table->text('small_text')->nullable(); // description paragraph
            $table->string('button_text')->nullable(); // "order now"
            $table->string('button_url')->nullable(); // button link
            $table->string('offer_image')->nullable(); // main offer image
            $table->string('offer_price_text')->nullable(); // "only"
            $table->decimal('offer_price', 10, 2)->nullable(); // 8.25
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_sections');
    }
};
