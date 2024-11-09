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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            // section 1
            $table->string('section1_tagline');
            $table->string('section1_title');
            $table->text('section1_description');
            $table->string('section1_image');
            $table->string('section1_button_text');
            $table->string('section1_button_url');

            // section 2
            $table->string('section2_title');
            $table->text('section2_description');
            $table->json('section2_people')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
