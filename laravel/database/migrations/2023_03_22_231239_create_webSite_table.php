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
        Schema::create('webSite', function (Blueprint $table) {
            $table->id("num_s");
            $table->foreignid("num_client");
            $table->foreign("num_client")->references("num_client")->on("client");
            $table->string("type");
            $table->string("desgin");
            $table->tinyInteger("Logo")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webSite');
    }
};
