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
        Schema::create('eCommerceModel', function (Blueprint $table) {
            $table->biginteger("num_ecommerce_model");
            $table->foreignid("num_s");
            $table->foreign("num_s")->references("num_s")->on("webSite");
            $table->primary(["num_ecommerce_model","num_s"]) ;
            $table->tinyInteger('product_management')->default(0);
            $table->tinyInteger('order_management')->default(0);
            $table->tinyInteger('basket_management')->default(0);
            $table->tinyInteger('promotion_management')->default(0);
            $table->tinyInteger('stock_management')->default(0);
            $table->tinyInteger('search_engine')->default(0);
            $table->tinyInteger('online_payment')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eCommerceModel');
    }
};
