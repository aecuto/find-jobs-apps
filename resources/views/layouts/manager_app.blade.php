@extends('layouts.app')

@section('title')
<title>Manager</title>
@endsection

@section('navbar')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <a class="p-2 text-dark" href="/">JOB TH</a>
    </h5>
  <nav class="my-2 my-md-0 mr-md-3">
  @if (Route::has('login'))
      @auth

          @if(Auth::user()->authorizeRoles(['manager']))
            <a class="p-2 text-dark" href="/manager">ตำแหน่งงานที่เพิ่มแล้ว</a>
            <a class="p-2 text-dark" href="{!! route('jobPositions.create') !!}">เพิ่มตำแหน่งงานว่าง</a>
            <a class="p-2 text-dark" href="{!! route('companies.show_resume') !!}">ใบสมัครงานที่เก็บไว้</a>
            <a class="p-2 text-dark" href="{!! route('companies.index') !!}">ข้อมูลบริษัท</a>
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
<div class="container">

  @include('flash::message')

  <div class="row">
      @include('layouts.menu')
      <div class="col-8">
            @yield('manager_content')
      </div>
  </div>

  @include('layouts.footer')
</div>

@endsection
