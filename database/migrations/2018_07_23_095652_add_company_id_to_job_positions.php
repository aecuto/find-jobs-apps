<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyIdToJobPositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('job_positions', function(Blueprint $table)
      {
          $table->integer('company_id')->unsigned();
          $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('job_positions', function(Blueprint $table)
      {

        $table->dropForeign('job_positions_company_id_foreign');
        $table->dropColumn('company_id');

      });
    }
}
