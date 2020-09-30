<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('amount');
          $table->date('date');
          $table->bigInteger('income_id')->unsigned();
          $table->bigInteger('outgo_id')->unsigned();
          $table->bigInteger('users_id')->unsigned();

          $table->foreign('income_id')->references('id')->on('income');
          $table->foreign('outgo_id')->references('id')->on('outgo');
          $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('budgets');
    }
}
