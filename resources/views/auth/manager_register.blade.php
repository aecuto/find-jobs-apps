@extends('layouts.app')

@section('active_menu')
Register
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
      <div class="col-sm-10">
        <div class="card">
          <div class="card-body">

          {!! Form::open(['url' => '/register', 
          'method' => 'post']) !!}

            {{ Form::hidden('role', 'manager') }}
            {{ Form::hidden('package', null, array('id' => 'package')) }}

            @include('auth.fields')

          {!! Form::close() !!}
                      
          </div>
        </div>
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
