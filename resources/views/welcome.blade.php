@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection

@section('navbar')

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Jobs TH</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/">Home</a>
    @if (Route::has('login'))
        <a class="p-2 text-dark" href="{{ route('search.job') }}" >Search Jobs</a>
        <a class="p-2 text-dark" href="{{ route('search.worker') }}" >Search Workers</a>

        @auth
            @if(Auth::user()->authorizeRoles(['admin']))
              <a class="p-2 text-dark" href="{{ route('admin.home') }}">Admin Management</a>
            @endif

            @if(Auth::user()->authorizeRoles(['manager']))
              <a class="p-2 text-dark" href="{{ route('manager.home') }}">Job Management</a>
            @endif

            @if(Auth::user()->authorizeRoles(['member']))
              <a class="p-2 text-dark" href="{{ route('member.home') }}">Member Profile</a>
            @endif

            <a class="btn btn-outline-primary" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        @else
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-outline-secondary" href="{{ route('register') }}">Register</a>
        @endauth
    @endif
  </nav>

  </div>
@endsection

@section('content')
<div class="content">
    <div class="text-center">
      <h1 class="display">Home Page</h1>
    </div>
</div>
@endsection