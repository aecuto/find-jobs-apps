@extends('layouts.app')

@section('title')
<title>Member</title>
@endsection

@section('navbar')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <a class="p-2 text-dark" href="/">JOB TH</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      @auth
        @if(Auth::user()->authorizeRoles(['member']))
          <a class="p-2 text-dark" href="/member">Member Profile</a>
        @endif
      @endauth
    </nav>
    @if (Route::has('login'))
      @auth
        <a class="btn btn-outline-primary" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endauth
    @endif
</div>
@endsection
  
@section('content')
  <div class="container">

    @include('flash::message')

    <div class="row">
        @include('layouts.menu')
        <div class="col-8">
              @yield('member_content')
        </div>
    </div>

    @include('layouts.footer')
    
  </div>

@endsection
