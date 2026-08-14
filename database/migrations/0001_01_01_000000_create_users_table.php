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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('phonenumber')->unique()->nullable();
            $table->boolean('is_superuser')->default(0);
            $table->unsignedBigInteger(column: 'wallet')->default(0);
            // $table->boolean('is_staff')->default(0);
            $table->bigInteger('cart_number')->nullable();
            $table->bigInteger('meli_code')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('password');
            $table->char('image')->nullable();
            $table->bigInteger('home_number')->nullable();
            $table->string('email')->nullable()->unique();
            $table->boolean('IsSeller');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });


        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('subject');
            $table->longText('content');
            $table->char('email');
            $table->timestamp('failed_at')->useCurrent();
        });

        
        Schema::create('books', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('brand_id');
            $table->integer('price');
            $table->integer('discount_end_time');
            $table->integer('count')->default(0);
            $table->bigInteger('count_view')->default(0);
            $table->longText('discription');
            $table->longText('Criticism');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('stars');
            $table->float('with');
            $table->float('length');
            $table->float('discust');
            $table->string('garant');
            $table->boolean('Chosen')->default(0);
            $table->boolean('Special_sale')->default(0);
            $table->timestamp('failed_at')->useCurrent();
        });


        Schema::create('address', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('ostan');
            $table->string('city');
            $table->char('street');
            $table->boolean('is_selected')->default(false);
            $table->integer('number');
            $table->integer('post_number');
            $table->integer('plate');
            $table->longText('explanation');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id()->primary();
            $table->boolean('status')->default(0);
            $table->longText('content');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->unsignedBigInteger('commenttable_id');
            $table->string('commenttable_type');
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('failed_at')->useCurrent();
        });


        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title');
            $table->bigInteger('count_view')->default(0);
            $table->longText('content');
            $table->char('image');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('activecodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('code');
            $table->unique(['user_id','code']);
            $table->timestamp('expired_at');
        });


        Schema::create('book_user', function (Blueprint $table) {

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['book_id','user_id']);
        });

        Schema::create('blog_user', function (Blueprint $table) {

            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['blog_id','user_id']);
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->string('image');
            $table->string('alt')->nullable();
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('discount');
            $table->enum('status',['unpaid', 'paid', 'posted','recieved','cancelled']);
            $table->string('tracking_serial')->nullable();
            $table->timestamps();
        });


        Schema::create('order_book', function (Blueprint $table) {


            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->integer('quantity');
            $table->primary(['order_id','book_id']);


        });

        Schema::create('Questions', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('Seller_id')->nullable();
            $table->foreign('Seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->longText('Question');
            $table->longText('Answer')->nullable();
            $table->unsignedBigInteger('Score')->default(0);
            $table->timestamp('failed_at')->useCurrent();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
