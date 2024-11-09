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
        Schema::create('geographics', function (Blueprint $table) {
            $table->id();
            // section 1
            $table->string('section1_title');
            $table->json('section1_demographic')->nullable();
            $table->string('section1_hero_image');

            // section 2
            $table->string('section2_title');
            $table->text('section2_description');
            $table->json('section2_topography')->nullable();

            // section 3
            $table->string('section3_title');
            $table->text('section3_description');
            $table->string('section3_image1');
            $table->string('section3_image2');

            // section 4
            $table->string('section4_title');
            $table->text('section4_description');
            $table->json('section4_disasters')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geographics');
    }
};
