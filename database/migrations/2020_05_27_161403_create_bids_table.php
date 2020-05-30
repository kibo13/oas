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
            $table->bigInteger('branch_id')->unsigned();
            $table->bigInteger('street_id')->unsigned();
            $table->integer('num_home');
            $table->string('num_corp')->nullable();
            $table->integer('num_flat');
            $table->date('date_in');
            $table->time('time_in');
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->bigInteger('type_id')->unsigned();           
            $table->bigInteger('defect_id')->unsigned();
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
