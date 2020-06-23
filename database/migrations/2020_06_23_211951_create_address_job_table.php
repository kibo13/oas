<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_job', function (Blueprint $table) {
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('job_id')->unsigned();

            $table
                ->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');

            $table
                ->foreign('job_id')
                ->references('id')
                ->on('jobs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_job');
    }
}
