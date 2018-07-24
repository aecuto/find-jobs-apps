@extends('layouts.member_app')

@section('member_content')

  <div class="card bg-pimary">
    <h5 class="card-header">Resume</h5>
    <div class="card-body">
      @include('member_profiles.show_fields')
      <hr>
      <a href="{!! route('member.home') !!}" class="btn btn-primary">Back</a>
    </div>
  </div>

@endsection
