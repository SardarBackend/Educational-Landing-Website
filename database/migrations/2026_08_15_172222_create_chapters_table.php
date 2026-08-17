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
    Schema::create('chapters', function (Blueprint $table) {
        $table->id();
        $table->foreignId('course_id')->constrained()->cascadeOnDelete();
        $table->string('title');
        $table->integer('sort')->default(0);
        $table->timestamps();
    });

    Schema::create('videos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('chapter_id')->constrained()->cascadeOnDelete();
        $table->string('title');
        $table->string('video');
        $table->integer('duration')->nullable();
        $table->integer('sort')->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
