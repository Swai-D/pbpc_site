<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('Heading');
            $table->string('Caption');
            $table->string('Position');
            $table->string('Photo')->default('default.jpg');
            $table->string('AuthorName');
            $table->string('Content');
            $table->string('AuthorPhoto')->nullable();
            $table->string('Likes')->nullable();
            $table->string('Comments')->nullable();
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
