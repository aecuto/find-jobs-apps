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
            $table->string('jobname')->nullable();
            $table->string('companyname')->nullable();
            $table->string('job');
            $table->string('certificate')->nullable();
            $table->string('country')->nullable();
            $table->string('salary')->nullable();
            $table->string('experience')->nullable();
            $table->string('map')->nullable();
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
