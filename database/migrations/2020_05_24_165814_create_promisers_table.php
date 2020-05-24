<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promisers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('street_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->integer('num_home');
            $table->string('num_corp')->nullable();
            $table->integer('num_flat');
            $table->date('date_on');
            $table->date('date_off');
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
        Schema::dropIfExists('promisers');
    }
}
