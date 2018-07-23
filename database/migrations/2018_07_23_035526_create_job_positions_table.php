<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobPositionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobname');
            $table->string('companyname');
            $table->string('job');
            $table->string('certificate');
            $table->string('country');
            $table->integer('salary');
            $table->string('experience');
            $table->string('map');
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
        Schema::drop('job_positions');
    }
}
