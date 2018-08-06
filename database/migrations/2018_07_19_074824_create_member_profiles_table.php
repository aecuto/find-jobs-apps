<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('country')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('military_status')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('interested_job')->nullable();
            $table->string('keyword_interested_job')->nullable();
            $table->string('certificate')->nullable();
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('work_time')->nullable();
            $table->binary('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member_profiles');
    }
}
