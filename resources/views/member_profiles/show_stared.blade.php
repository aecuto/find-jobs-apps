@extends('layouts.member_app')

@section('member_content')

@foreach($stars as $star)
<p>
  Jobname: {{$star->jobname}}
</p>
@endforeach


@endsection
