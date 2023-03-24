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
        Schema::create('dynamicModel', function (Blueprint $table) {
            $table->biginteger("num_dynamic_model");
            $table->foreignid("num_s");
            $table->foreign("num_s")->references("num_s")->on("webSite");
            $table->primary(["num_dynamic_model" ,"num_s"]);
            $table->tinyinteger("home_page_management");
            $table->tinyinteger("landing_page_management");
            $table->tinyinteger("blog");
            $table->tinyinteger("comment_management");
            $table->tinyinteger("category_management");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamicModel');
    }
};
