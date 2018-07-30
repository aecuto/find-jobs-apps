<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MemberProfile;
use App\Models\JobPosition;

class SearchController extends Controller
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
    public function search_job(Request $request)
    {

      if($request->job != ''){
        $jobs = JobPosition::where('job', $request->job)->orderBy('created_at', 'DESC')->get();
      }else{
        $jobs = JobPosition::orderBy('created_at', 'DESC')->get();
      }

      return view('search.search_job')->with('jobResult', $jobs);

    }

    public function search_worker(Request $request)
    {

      if($request->interested_job != ''){
        $workers = MemberProfile::where('interested_job', $request->interested_job)->orderBy('created_at', 'DESC')->get();
      }else{
        $workers = MemberProfile::orderBy('created_at', 'DESC')->get();
      }

      return view('search.search_worker')->with('workers', $workers);

    }
}
