<?php

use Illuminate\Database\Seeder;
use App\Models\JobPosition;

class JobPositions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $job_type = array("คอมพิวเตอร์", "บัญชี/การเงิน", "ส่งเอกสาร/ขับรถ/ส่งของ");
    	foreach (range(1,30) as $index) {
        $job = new JobPosition();
        $job->jobname =  $faker->jobTitle;
        $job->job =  $job_type[$index%3];
        $job->start_date =  date("Y-m-d");
        $job->end_date =  date('Y-m-d', strtotime(date("Y-m-d"). ' + 7 days'));
        $job->company_id = 1;
        $job->save();
      }
    }
}
