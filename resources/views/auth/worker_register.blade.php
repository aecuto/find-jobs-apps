@extends('layouts.app')

@section('active_menu')
Worker Register
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
          {!! Form::open(['url' => '/register', 'method' => 'post']) !!}

            {{ Form::hidden('role', 'member') }}
            @include('auth.fields')

          {!! Form::close() !!}
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
