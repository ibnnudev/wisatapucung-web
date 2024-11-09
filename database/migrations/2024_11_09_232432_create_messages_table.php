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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('section_title');
            $table->string('section_subtitle');
            $table->string('section_image');
            $table->string('section_review_rating');
            $table->string('section_review_text');
            $table->string('section_review_author');
            $table->string('section_review_author_image');
            $table->string('section_review_author_position');
            $table->json('messages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
