<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnBoqsAdd3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boqs', function (Blueprint $table) {
            $table->float('wage_cost', 8, 2)->after('total')->default('0')->nullable();
            $table->float('material_cost', 8, 2)->after('wage_cost')->default('0')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boqs', function (Blueprint $table) {
            $table->dropColumn('wage_cost','material_cost');
        });
    }
}
