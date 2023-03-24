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
        Schema::create('extraDetail', function (Blueprint $table) {
            $table->biginteger("num_detail");
            $table->foreignid("num_site");
            $table->foreign("num_site")->references("num_s")->on("webSite");
            $table->primary(["num_detail" , "num_site"]) ;
            $table->tinyInteger("newsleeter")->default(0) ;
            $table->tinyInteger("multilangue")->default(0) ;
            $table->tinyInteger("google_anlytique")->default(0) ;
            $table->tinyInteger("livraison_30_jour")->default(0) ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extraDetail');
    }
};
