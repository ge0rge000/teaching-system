<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unitusers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();//// year

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('unitone')->nullable();
            $table->string('unittwo')->nullable();
            $table->string('unitthree')->nullable();
            $table->string('unitfour')->nullable();
            $table->string('unitfive')->nullable();
            $table->string('unitsix')->nullable();
            $table->string('unitseven')->nullable();
            $table->string('uniteight')->nullable();
            $table->string('unitnine')->nullable();
            $table->string('unitten')->nullable();
            $table->string('uniteleven')->nullable();
            $table->string('unittwelve')->nullable();
            $table->string('unitthriten')->nullable();
            $table->string('unitfourten')->nullable();
            $table->string('unitfiften')->nullable();
            $table->string('unitsixten')->nullable();


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
        Schema::dropIfExists('unitusers');
    }
}
