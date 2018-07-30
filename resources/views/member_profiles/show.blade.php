@extends('layouts.member_app')

@section('member_content')

  <div class="card bg-pimary">
    <h5 class="card-header">Resume</h5>
    <div class="card-body">
      @include('member_profiles.show_fields')
      <hr>

      <a href="{!! route('member.home') !!}" class="btn btn-primary">Back</a>
      @auth
        @if(Auth::user()->authorizeRoles(['manager']))
          {!! Form::open(['route' => ['manager.save_resume', $memberProfile->id], 'method' => 'post']) !!}
              {!! Form::button(Auth::user()->have_resume->find($memberProfile->id) ? 'เก็บใบสมัครงานแล้ว' : 'เก็บใบสมัครงาน', [
                'type' => 'submit', 
                'class' => 'btn btn-success btn-xs', 
                'disabled' => Auth::user()->have_resume->find($memberProfile->id) ? true : false ,
                'onclick' => "return confirm('Are you sure?')"]) !!}
          {!! Form::close() !!}
        @endif
      @endauth

    </div>
  </div>

@endsection
