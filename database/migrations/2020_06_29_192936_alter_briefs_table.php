<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('briefs', function (Blueprint $table) {
            $table->decimal('hw_pst')->nullable()->change();
            $table->decimal('hw_pbk')->nullable()->change();
            $table->decimal('cw_r')->nullable()->change();
            $table->decimal('cw_ot')->nullable()->change();
            $table->decimal('cw_tf')->nullable()->change();
            $table->decimal('cw_fs')->nullable()->change();
            $table->decimal('cw_s')->nullable()->change();

            $table->decimal('kg_pst');
            $table->decimal('kg_pbk');
            $table->decimal('kg_r');
            $table->decimal('kg_ot');
            $table->decimal('kg_tf');
            $table->decimal('kg_fs');
            $table->decimal('kg_s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('briefs', function (Blueprint $table) {
            $table->decimal('hw_pst', 2, 1)->change();
            $table->decimal('hw_pbk', 2, 1)->change();
            $table->decimal('cw_r', 2, 1)->change();
            $table->decimal('cw_ot', 2, 1)->change();
            $table->decimal('cw_tf', 2, 1)->change();
            $table->decimal('cw_fs', 2, 1)->change();
            $table->decimal('cw_s', 2, 1)->change();
            $table->dropColumn(['kg_pst', 'kg_pbk', 'kg_r', 'kg_ot', 'kg_tf', 'kg_fs', 'kg_s']);
        });
    }
}
