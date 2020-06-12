<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableBids extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bids', function (Blueprint $table) {
            $table->string('num_home')->change();
            $table->text('desc');
            $table->dropColumn(['num_corp', 'defect_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bids', function (Blueprint $table) {
            $table->integer('num_home')->change();
            $table->string('num_corp')->nullable();
            $table->bigInteger('defect_id')->unsigned();
            $table->dropColumn('desc');
        });
    }
}