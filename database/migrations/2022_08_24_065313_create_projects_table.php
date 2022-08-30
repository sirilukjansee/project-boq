<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('location');
            $table->string('area');
            $table->string('unit');
            $table->string('io');
            $table->string('task');
            $table->string('task_n');
            $table->date('start_date');
            $table->date('finish_date');
            $table->integer('all_date');
            $table->date('open_date');
            $table->string('designer_name');
            $table->string('project_manager');
            $table->float('total', 8, 2)->default('0')->nullable()->comment('ยอดรวม');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}