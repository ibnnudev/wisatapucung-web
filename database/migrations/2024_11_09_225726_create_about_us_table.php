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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            // section 1
            $table->string('section1_title');
            $table->text('section1_description');
            $table->string('section1_image');
            $table->json('section1_key_bussiness')->nullable();
            // section 2
            $table->string('section2_title');
            $table->text('section2_description');
            $table->json('section2_potentials')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
