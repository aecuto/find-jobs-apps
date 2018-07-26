
@extends('layouts.manager_app')

@section('manager_content')

@include('adminlte-templates::common.errors')

@foreach($resumes as $resume)
<p>
  Jobname: {{$resume->fullname}}
</p>
@endforeach


@endsection

