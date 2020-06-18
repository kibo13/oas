<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_brief');
            $table->tinyInteger('temp');
            $table->smallInteger('pressure');
            $table->tinyInteger('hw_tst');
            $table->tinyInteger('hw_tbk');
            $table->decimal('hw_pst', 2, 1);
            $table->decimal('hw_pbk', 2, 1);
            $table->decimal('cw_r', 2, 1);
            $table->decimal('cw_ot', 2, 1);
            $table->decimal('cw_tf', 2, 1);
            $table->decimal('cw_fs', 2, 1);
            $table->decimal('cw_s', 2, 1);
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
        Schema::dropIfExists('briefs');
    }
}
