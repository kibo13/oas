<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bid_id')->unsigned();
            $table->date('date_log');
            $table->time('time_log');
            $table->tinyInteger('type_log');
            $table->text('solution');
            $table->string('note')->nullable();
            $table->tinyInteger('home_hw')->default(0);
            $table->tinyInteger('home_cw')->default(0);
            $table->tinyInteger('home_h')->default(0);
            $table->tinyInteger('crane_hw')->default(0);
            $table->tinyInteger('crane_cw')->default(0);
            $table->tinyInteger('crane_h')->default(0);
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
        Schema::dropIfExists('logs');
    }
}
