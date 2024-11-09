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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            // section 1
            $table->string('section1_title');
            $table->longText('section1_description');
            $table->longText('section1_image');

            // section 2
            $table->string('section2_slogan');
            $table->string('section2_title');
            $table->longText('section2_image');
            $table->json('section2_items')->nullable();

            // section 3
            $table->string('section3_title');
            $table->longText('section3_description');
            $table->longText('section3_image');
            $table->string('section3_rate');
            $table->string('section3_rate_text');

            // section 4
            $table->string('section4_title');
            $table->longText('section4_description');
            $table->longText('section4_image');
            $table->string('section4_rate');
            $table->string('section4_rate_text');
            $table->string('section4_social_media_button_title');
            $table->string('section4_social_media');

            // section 5
            $table->longText('section5_welcome_message');
            $table->string('section5_name');
            $table->string('section5_position');
            $table->longText('section5_image');
            $table->longText('section5_pretext');
            $table->string('section5_social_media_button_title');
            $table->string('section5_social_media');

            // section 6
            $table->string('section6_title');
            $table->json('section6_items')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
