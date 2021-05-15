<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studen_exams', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->bigInteger('exam_id')->unsigned()->nullable();//// year

            $table->foreign('exam_id')->references('exam_id')->on('questions')->onDelete('cascade');
            $table->integer('choice')->nullable();
            $table->integer('result')->nullable();
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
        Schema::dropIfExists('studen_exams');
    }
}
