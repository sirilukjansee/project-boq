<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnTemplateBoqsAdd2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_boqs', function (Blueprint $table) {
            $table->float('overhead', 8, 2)->after('comment')->default('0')->nullable();
            $table->float('discount', 8, 2)->after('overhead')->default('0')->nullable();
            $table->foreignId('vender_id')->after('discount')->comment('ชื่อของ vender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_boqs', function (Blueprint $table) {
            $table->dropColumn('overhead','discount','vender_id');
        });
    }
}
