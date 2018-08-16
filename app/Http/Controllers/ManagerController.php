<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

use App\User;
use App\Models\JobPosition;
use App\Models\MemberProfile;
use App\Models\company;

class ManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      if(!$request->user()->hasRole(['manager'])){
        return view('welcome')->with('message','คุณไม่สามารถทำรายการนี้ได้');
      }

      $company_id = company::where('user_id', Auth::user()->id)->first()->id;
      $jobs = JobPosition::where('company_id', $company_id)->orderBy('created_at', 'DESC')->get();

      return view('manager_home')->with('jobPositions', $jobs);
      
    }

    public function show_managers(){
      $managers = DB::select("select * from users where id IN (select id from role_user where role_id=(select id from roles where name='manager'))");
      
      return view('admin.show_managers')->with('managers', $managers);
    }

    public function destroy($id){
      User::where('id',$id)->delete();

      return back();
    }

    public function save_resume($id){
      $user = Auth::user();
      $user->have_resume()->attach(MemberProfile::where('id', $id)->first());
      
      $memberProfile = MemberProfile::find($id);
      
      return view('member_profiles.show')->with('memberProfile', $memberProfile);
    }


}
