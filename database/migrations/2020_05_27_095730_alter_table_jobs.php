<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->date('date_on')->change();
            $table->date('date_off')->change();
            $table->time('time_on')->nullable();
            $table->time('time_off')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dateTime('date_on')->change();
            $table->dateTime('date_off')->change();
            $table->dropColumn(['time_on', 'time_off']);
        });
    }
}
