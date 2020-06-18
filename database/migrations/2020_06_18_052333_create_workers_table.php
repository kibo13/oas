<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('branch_id')->unsigned();
            $table->bigInteger('position_id')->unsigned();
            $table->bigInteger('street_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mid_name')->nullable();
            $table->integer('num_home');
            $table->string('num_corp')->nullable();
            $table->integer('num_flat');
            $table->string('work_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mob_phone')->nullable();
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
        Schema::dropIfExists('workers');
    }
}
