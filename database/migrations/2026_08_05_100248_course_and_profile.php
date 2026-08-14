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

    
        Schema::table('books', function (Blueprint $table) {
            if (!Schema::hasColumn('books', 'user_id')) {
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
        Schema::create('blogCategorys', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->unsignedBigInteger('parent');
            $table->timestamps();
        });


        Schema::create('bookcategory', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->unsignedBigInteger('parent')->default(0);
            $table->timestamps();
        });


        Schema::create('blogCategorys_blog', function (Blueprint $table) {

            $table->unsignedBigInteger('blogCategory_id');
            $table->foreign('blogCategory_id')->references('id')->on('blogCategorys')->onDelete('cascade');
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->primary(['blogCategory_id','blog_id']);



        });


        Schema::create('book_bookcategory', function (Blueprint $table) {


            $table->unsignedBigInteger('bookcategory_id');
            $table->foreign('bookcategory_id')->references('id')->on('bookcategory')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->primary(['bookcategory_id','book_id']);


        });



        Schema::create('attribute', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });



        Schema::create('attribute_value', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attribute')->onDelete('cascade');
            $table->timestamps();
        });



        Schema::create('attribute_book', function (Blueprint $table) {


            $table->unsignedBigInteger('attributes_id');
            $table->foreign('attributes_id')->references('id')->on('attribute')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('value_id');
            $table->foreign('value_id')->references('id')->on('attribute_value')->onDelete('cascade');
            $table->primary(['attributes_id','book_id','value_id']);


        });





        Schema::create('messages' , function (Blueprint $table ){
            $table->id()->primary();
            $table->longText('message');
            $table->boolean('Seen')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('failed_at')->useCurrent();
        });




        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->morphs('taggable');
            $table->timestamps();
        });


        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('buyer_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('order_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('quantity')->default(1);
            $table->decimal('total_price', 10, 2);
            $table->decimal('commission', 10, 2);
            $table->decimal('tax', 10, 2);
            $table->timestamp('sale_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
