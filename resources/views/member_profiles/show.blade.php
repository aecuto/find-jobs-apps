@extends('layouts.member_app')

@section('active_menu')
RESUME
@endsection

@section('member_content')

  <div class="card bg-pimary">
    <h5 class="card-header">Resume</h5>
    <div class="card-body">
      @include('member_profiles.show_fields')
      <hr>

      @auth
        @if(Auth::user()->authorizeRoles(['manager']))
        <div class="col text-center">
          {!! Form::open(['route' => ['manager.save_resume', $memberProfile->id], 'method' => 'post']) !!}
              {!! Form::button(Auth::user()->have_resume->find($memberProfile->id) ? 'เก็บใบสมัครงานแล้ว' : 'เก็บใบสมัครงาน', [
                'type' => 'submit', 
                'class' => 'btn btn-success btn-xs', 
                'disabled' => Auth::user()->have_resume->find($memberProfile->id) ? true : false ,
                'onclick' => "return confirm('Are you sure?')"]) !!}
          {!! Form::close() !!}
        </div>
        @endif
      @endauth

    </div>
  </div>

@endsection
