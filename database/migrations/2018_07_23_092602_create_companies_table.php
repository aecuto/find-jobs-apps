<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname')->nullable();
            $table->string('companytype')->nullable();
            $table->text('details')->nullable();
            $table->string('start_year')->nullable();
            $table->string('worker_count')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('fullname_contact')->nullable();
            $table->string('position_contact')->nullable();
            $table->string('map_position')->nullable();
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
        Schema::drop('companies');
    }
}
