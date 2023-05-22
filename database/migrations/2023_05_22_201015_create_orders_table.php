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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("users_Id")->references("id")->on("users");
            $table->string("status");
            $table->string("payment_method")->default("cash on delivery");
            $table->string("payment_method_status");
            $table->string("payment_id");
            $table->string("total_price");
            $table->string("address");
            $table->string("city");
            $table->string("full name");
            $table->string("phone");
            $table->string("shipping_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
