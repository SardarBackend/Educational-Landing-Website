<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::create('courses', function (Blueprint $table) {
        //     $table->id();

        //     // اطلاعات اصلی
        //     $table->string('title');
        //     $table->string('slug')->unique();
        //     $table->text('short_description')->nullable();
        //     $table->longText('description')->nullable();

        //     // مدرس دوره
        //     $table->foreignId('teacher_id')
        //         ->nullable()
        //         ->constrained('users')
        //         ->nullOnDelete();

        //     // تصویر و ویدئو معرفی
        //     $table->string('thumbnail')->nullable();
        //     $table->string('intro_video')->nullable();

        //     // قیمت
        //     $table->decimal('price', 12, 2)->default(0);
        //     $table->decimal('discount_price', 12, 2)->nullable();

        //     // مدت زمان دوره
        //     $table->integer('duration_minutes')->default(0);

        //     // سطح دوره
        //     $table->enum('level', [
        //         'beginner',
        //         'intermediate',
        //         'advanced'
        //     ])->default('beginner');

        //     // وضعیت انتشار
        //     $table->enum('status', [
        //         'draft',
        //         'published',
        //         'archived'
        //     ])->default('draft');

        //     // تعداد دانشجو
        //     $table->unsignedInteger('students_count')->default(0);

        //     // تاریخ انتشار
        //     $table->timestamp('published_at')->nullable();

        //     $table->timestamps();

        //     $table->index('status');
        //     $table->index('level');
        // });
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('seller_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->morphs('questionable');

            $table->longText('question');
            $table->longText('answer')->nullable();
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('questions')
                ->cascadeOnDelete();
            $table->unsignedBigInteger('score')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};