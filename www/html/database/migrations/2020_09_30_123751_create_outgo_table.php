<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgo', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('amount');
          $table->string('title');
          $table->string('memo');
          $table->date('date');
          $table->bigInteger('users_id')->unsigned();
          $table->bigInteger('category_id')->unsigned();

          $table->foreign('users_id')->references('id')->on('users');
          $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outgo', function (Blueprint $table) {
            //
        });
    }
}
