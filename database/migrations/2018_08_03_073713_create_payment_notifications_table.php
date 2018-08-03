<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentNotificationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_type');
            $table->string('companyname');
            $table->string('email');
            $table->string('phone');
            $table->string('bankname');
            $table->float('money');
            $table->text('details');
            $table->boolean('read')->default(false);
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
        Schema::drop('payment_notifications');
    }
}
