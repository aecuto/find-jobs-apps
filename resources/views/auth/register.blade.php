@extends('layouts.app')

@section('active_menu')
Type Register
@endsection

@section('title')
<title>Register</title>
@endsection

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="container">
  @include('flash::message')

  <div class="row">
      @include('layouts.menu')
      <div class="col-8">
        <div class="row">
          <div class="col text-center">
            <h1 class="display-1">
              <i class="fas fa-users text-info"></i>
            </h1>
            <a href="/worker_register" role="button" class="btn btn-info">Worker</a>
          </div>
          <div class="col text-center">
              <h1 class="display-1">
                <i class="fas fa-user-tie text-info"></i>
              </h1>
            <a href="/manager_package" role="button" class="btn btn-info">Manager</a>            
          </div>
        </div>
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
