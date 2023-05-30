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
            $table->foreignId("product_size_id")->references("id")->on("product_sizes");
            $table->foreignId("product_color_id")->references("id")->on("product_colors");
            $table->integer("quantity");
            $table->decimal("price",10,2)->nullable();
            $table->decimal("discount",10,2)->nullable();
            $table->string("status")->default('pending ')->nullable();
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
