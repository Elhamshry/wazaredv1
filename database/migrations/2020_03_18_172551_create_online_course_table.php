<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_course', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('course_type');
            $table->string('name');
            $table->string('description');
            $table->string('link');
            $table->dateTime('date');
            $table->double('rate');
            $table->string('image');
            $table->integer('joined_num');
            $table->integer('likes_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_course');
    }
}
