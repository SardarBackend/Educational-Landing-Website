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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();

            // اطلاعات اصلی
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            // فایل‌ها
            $table->string('audio_file');
            $table->string('cover_image')->nullable();

            // مشخصات پادکست
            $table->integer('duration')->nullable(); // مدت زمان بر حسب ثانیه
            $table->string('language', 10)->default('fa');
            $table->date('published_at')->nullable();

            // آمار
            $table->unsignedBigInteger('play_count')->default(0);
            $table->unsignedBigInteger('download_count')->default(0);

            // وضعیت
            $table->enum('status', [
                'draft',
                'published',
                'archived'
            ])->default('draft');

            // سئو
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();

            $table->index('status');
            $table->index('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcasts');
    }
};