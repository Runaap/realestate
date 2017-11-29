<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',100)->unique();
            $table->string('number');
            $table->text('owner_address');
            $table->string('land_area');
            $table->string('land_size');
            $table->text('land_address');
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
        Schema::dropIfExists('land_owners');
    }
}
