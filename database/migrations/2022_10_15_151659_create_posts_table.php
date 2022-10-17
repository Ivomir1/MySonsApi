<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false); //titulek clanku ** php artisan make:controller PostsController --model Post
            $table->text('text')->nullable(true);   //text clanku ** php artisan make:migration create_posts_table --create=posts
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade'); //cizi klic na tabulku users id, indexovany
            $table->timestamps(); // ** php artisan make:seeder PostsTableSeeder
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
