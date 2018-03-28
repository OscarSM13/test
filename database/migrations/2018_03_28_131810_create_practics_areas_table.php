<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticsAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('description');
            $table->string('image');

            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('practice_areas')
                ->onDelete('set null')->onUpdate('cascade');
        });

        Schema::create('biographies_practice_areas', function (Blueprint $table) {
            $table->integer('biography_id')->unsigned();
            $table->foreign('biography_id')->references('id')->on('biographies')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('practice_area_id')->unsigned();
            $table->foreign('practice_area_id')->references('id')->on('practice_areas')
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
        Schema::dropIfExists('biographies_practice_areas');
        Schema::dropIfExists('practice_areas');
    }
}
