<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title', 180);
            $table->text('description');
            $table->datetime('publish_date');
            $table->timestamps();

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('blog_categories')
                ->onDelete('set null')->onUpdate('cascade');
        });

        Schema::create('blog_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 75);
            $table->timestamps();
        });

        Schema::create('blog_tags_blogs', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

            $table->integer('blog_tag_id')->unsigned();
            $table->foreign('blog_tag_id')->references('id')->on('blog_tags')
                ->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_tags_blogs');
        Schema::dropIfExists('blog_tags');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_categories');
    }
}
