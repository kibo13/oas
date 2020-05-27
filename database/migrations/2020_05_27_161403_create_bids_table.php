<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('branch_id')->unsigned();
            $table->bigInteger('defect_id')->unsigned();
            $table->bigInteger('street_id')->unsigned();
            $table->date('date_in');
            $table->time('time_in');
            $table->string('last_name');
            $table->string('phone');
            $table->integer('num_home');
            $table->string('num_corp')->nullable();
            $table->integer('num_flat');
            $table->text('solution')->nullable();
            $table->date('date_on')->nullable();
            $table->time('time_on')->nullable();
            $table->date('date_off')->nullable();
            $table->time('time_off')->nullable();
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
        Schema::dropIfExists('bids');
    }
}
