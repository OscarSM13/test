<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('surnames', 150);
            $table->string('image');
            $table->string('email', 150);
            $table->string('phone', 20);
            $table->string('phone2', 20)->nullable();
            $table->string('job', 75);
            $table->text('description');
        });

        Schema::create('biography_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');

            $table->integer('biography_id')->unsigned();
            $table->foreign('biography_id')->references('id')->on('biographies')
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
        Schema::dropIfExists('biography_educations');
        Schema::dropIfExists('biographies');
    }
}
