<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePromisers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promisers', function (Blueprint $table) {
            $table->dropColumn('type_id');
            $table->string('num_home')->change();
            $table->date('date_on')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promisers', function (Blueprint $table) {
            $table->bigInteger('type_id')->unsigned();
            $table->integer('num_home')->change();
            $table->date('date_on')->change();
        });
    }
}
