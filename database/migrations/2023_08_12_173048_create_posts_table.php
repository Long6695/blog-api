<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
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
            $table->integer('userId')->index();
            $table->integer('categoryId')->index();
            $table->foreign('userId')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->text('title');
            $table->longText('content');
            $table->string('image');
            $table->string('slug', 200);
            $table->integer('type');
            $table->timestamps();
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
}
