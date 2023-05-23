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
            $table->foreignId("product_size_Id")->references("id")->on("product_sizes");
            $table->foreignId("product_colors_Id")->references("id")->on("product_colors");
            $table->integer("quantity");
            $table->decimal("price tow",10,2)->nullable();
            $table->decimal("discount",10,2)->nullable();
            $table->string("status")->default(1);
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
