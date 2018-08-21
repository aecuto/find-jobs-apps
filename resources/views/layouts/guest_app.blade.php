@extends('layouts.app')

@section('title')
<title>Guest</title>
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
            @yield('guest_content')
        </div>
    </div>

    @include('layouts.footer')
    
  </div>

@endsection
