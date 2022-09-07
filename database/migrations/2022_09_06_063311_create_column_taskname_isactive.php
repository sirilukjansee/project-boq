<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnTasknameIsactive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasknames', function (Blueprint $table) {
            $table->enum('is_active', ['0', '1'])->default('1')->after('task_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasknames', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
}
