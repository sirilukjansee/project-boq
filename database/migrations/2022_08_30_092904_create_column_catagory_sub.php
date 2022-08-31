<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnCatagorySub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catagory_subs', function (Blueprint $table) {
            $table->string('code')->after('id')->nullable();
            $table->string('brand_id')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catagory_subs', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('brand_id');
        });
    }
}
