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

      $current_date = date("Y/m/d");

      if($request->job != ''){
        $jobs = JobPosition::search_option($request)->orderBy('created_at', 'DESC')
        ->where('start_date', '<=', $current_date)
        ->where('end_date', '>=', $current_date)
        ->get();
      }else{
        $jobs = JobPosition::orderBy('created_at', 'DESC')
        ->where('start_date', '<=', $current_date)
        ->where('end_date', '>=', $current_date)
        ->get();
      }

      return view('search.search_job')->with('jobResult', $jobs);

    }

    public function search_worker(Request $request)
    {

      if($request->interested_job != ''){
        $workers = MemberProfile::search_option($request)->orderBy('created_at', 'DESC')->get();
      }else{
        $workers = MemberProfile::orderBy('created_at', 'DESC')->get();
      }

      return view('search.search_worker')->with('workers', $workers);

    }
}
