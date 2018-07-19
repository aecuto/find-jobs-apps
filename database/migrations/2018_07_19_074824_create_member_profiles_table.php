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
            $table->string('fullname');
            $table->string('gender');
            $table->string('status');
            $table->string('nationality');
            $table->string('religion');
            $table->date('birthdate');
            $table->integer('height');
            $table->integer('weight');
            $table->string('military_status');
            $table->text('address');
            $table->string('phone');
            $table->string('interested_job');
            $table->string('type_interested_job');
            $table->string('money_need');
            $table->string('work_time');
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
        Schema::drop('member_profiles');
    }
}
