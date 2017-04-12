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
            $table->increments('id');
            $table->string('title');
            $table->float('weight');
            $table->float('price');
            $table->string('slug')->unique();
            $table->text('teaserde');
            $table->text('teaseres');
            $table->text('body');
            $table->string('image');
            $table->timestamps();
            $table->string('imga');
            $table->text('descra');            
            $table->string('imgb');
            $table->text('descrb');            
            $table->string('imgc');
            $table->text('descrc');            
            $table->string('imgd');
            $table->text('descrd');
            $table->boolean('live')->dafault(0);
            
            $table->foreign('id')->references('id')->on('products');
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
