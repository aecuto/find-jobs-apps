@extends('layouts.app')

@section('active_menu')
Select Package
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
            <div class="card">
              <div class="card-body">
                <div class="card-title">Free Package</div>
                <p>Info</p>
                <p>Info</p>
                <p>Info</p>
                <p>Info</p>
                <p>Info</p>
                <a href="/manager_free" class="btn btn-secondary text-white" role="button">Free</a>
              </div>
            </div>
          </div>
          <div class="col text-center">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Silver Package</div>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <a href="/manager_silver" class="btn btn-primary text-white" role="button">Silver</a>
                </div>
              </div>
          </div>
          <div class="col text-center">
              <div class="card">
                <div class="card-body">
                  <div class="card-title">Gold Package</div>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <p>Info</p>
                  <a href="/manager_gold" class="btn btn-warning text-white" role="button">Gold</a>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
