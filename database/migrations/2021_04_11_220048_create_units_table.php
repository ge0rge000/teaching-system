<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
       
    $table->id();
    $table->string('name');
     $table->string('year_type');
    $table->string('short_description')->nullable();
    $table->decimal('regular_price');
     $table->string('pdf_words')->unique('');
    $table->string('pdf_grammer')->unique('');
    $table->string('video_words')->unique('');
    $table->string('video_grammer')->unique('');
    $table->string('image')->nullable();
    $table->text('images')->nullable();
    $table->bigInteger('category_id')->unsigned()->nullable();//// year
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('units');
    }
}
