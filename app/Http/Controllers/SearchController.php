<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      $jobs = JobPosition::where('job', $request->job)->get();
      return view('search.search_job')->with('jobResult', $jobs);
    }
}
