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
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_size_id")->references("id")->on("product_sizes")->onDelete('cascade');
            $table->foreignId("product_color_id")->references("id")->on("product_colors")->onDelete('cascade');
            $table->integer("quantity");
            $table->string("status")->default('in_stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_size');
    }
};
