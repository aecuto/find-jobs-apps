<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\announcements;
use App\Models\government_jobs;
use App\Models\PaymentNotification;
use App\Models\ContactUs;

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
      $announcement_count = announcements::where('status',0)->count();
      $government_jobs_count = government_jobs::where('status',0)->count();
      $payment_notification_count = PaymentNotification::where('read',false)->count();
      $contact_count = ContactUs::where('read',false)->count();

      if($request->user()->hasRole(['admin'])){
        return view('admin_home')
        ->with('contact_count',$contact_count)
        ->with('payment_notification_count',$payment_notification_count)
        ->with('government_jobs_count',$government_jobs_count)
        ->with('announcement_count',$announcement_count);
      }

      if($request->user()->hasRole(['manager'])){
        return redirect()->route('manager.home');
      }

      if($request->user()->hasRole(['member'])){
        return redirect()->route('member.home');
      }

      return redirect('/');
      
    }
}
