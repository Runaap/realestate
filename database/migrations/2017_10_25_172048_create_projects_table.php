<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('project_name');
            $table->integer('type_id');
            $table->integer('project_status_id');
            $table->integer('district_id');
            $table->integer('area_id');
            $table->text('image');
            $table->string('squre_fit');
            $table->string('floor');
            $table->string('bed_no');
            $table->string('bath_no');
            $table->string('parking_no');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('projects');
    }
}
