<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressPlotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_plot', function (Blueprint $table) {
            $table->bigInteger('address_id')->unsigned();
            $table->bigInteger('plot_id')->unsigned();

            $table
                ->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');

            $table
                ->foreign('plot_id')
                ->references('id')
                ->on('plots')
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
        Schema::dropIfExists('address_plot');
    }
}
