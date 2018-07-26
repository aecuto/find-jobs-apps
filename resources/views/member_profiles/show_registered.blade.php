@extends('layouts.member_app')

@section('member_content')

@foreach($registers as $register)
<p>
  Jobname: {{$register->jobname}}
</p>
@endforeach


@endsection
