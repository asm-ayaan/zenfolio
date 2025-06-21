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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('subtitle');
            
            $table->string('counter_one')->nullable();
            $table->string('counter_title_one')->nullable();

            $table->string('counter_tow')->nullable();
            $table->string('counter_title_two')->nullable();

            $table->string('counter_three')->nullable();
            $table->string('counter_title_three')->nullable();

            $table->string('counter_four')->nullable();
            $table->string('counter_title_four')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
