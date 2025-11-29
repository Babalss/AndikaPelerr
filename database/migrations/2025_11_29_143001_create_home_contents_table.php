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
    Schema::create('home_contents', function (Blueprint $table) {
        $table->id();

        // SECTION 1 (Hero)
        $table->string('hero_title')->nullable();
        $table->text('hero_text')->nullable();
        $table->string('hero_button')->nullable();
        $table->string('carousel_1')->nullable();
        $table->string('carousel_2')->nullable();
        $table->string('carousel_3')->nullable();

        // SECTION 2
        $table->string('section2_title')->nullable();
        $table->text('section2_text')->nullable();
        $table->string('section2_button')->nullable();
        $table->string('section2_image')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
};
