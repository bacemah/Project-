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
        Schema::create('content', function (Blueprint $table) {
            $table->biginteger("num_content"); 
            $table->foreignid("num_site")->nullable();
            $table->foreign("num_site")->references("num_s")->on("webSite");
            $table->primary(["num_content","num_site"]) ;
            $table->tinyinteger("landing_pages")->default(0) ;
            $table->tinyinteger("galerie")->default(0) ;
            $table->tinyinteger("formulaire_de_devis")->default(0) ;
            $table->tinyinteger("formulaire_de_contact")->default(0) ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
