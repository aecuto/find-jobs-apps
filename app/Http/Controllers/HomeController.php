<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home')->with('role', 'admin');
      }

      if($request->user()->hasRole(['businessman'])){
        return redirect()->route('member.index');
      }

      if($request->user()->hasRole(['member'])){
        return redirect()->route('member.index');
      }

      return view('welcome')->with('role', 'guest');
      
    }
}
