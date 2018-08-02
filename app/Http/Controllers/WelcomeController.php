<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\company;
use App\Models\JobPosition;
use App\Models\government_jobs;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $recent_job = JobPosition::orderBy("created_at",'DESC')->limit(10)->get();
      $recent_company = company::orderBy("created_at",'DESC')->limit(10)->get();
      $recent_government_jobs = government_jobs::where('status',1)->orderBy('created_at','DESC')->limit(10)->get();

      return view('welcome')
      ->with('recent_government_jobs',$recent_government_jobs)
      ->with('recent_job',$recent_job)
      ->with('recent_company',$recent_company);

    }

}
