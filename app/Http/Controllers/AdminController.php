<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
      if($request->user()->authorizeRoles(['admin'])){
        return view('admin_home');
      }

      if($request->user()->hasRole(['manager'])){
        return redirect()->route('manager.home');
      }

      if($request->user()->hasRole(['member'])){
        return redirect()->route('member.home');
      }

      return view('welcome');
      
    }
}
