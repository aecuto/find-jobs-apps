@extends('layouts.manager_app')

@section('active_menu')
ADD JOB
@endsection

@section('manager_content')
  @include('adminlte-templates::common.errors')

  {!! Form::open(['route' => 'jobPositions.store']) !!}

      @include('job_positions.fields')

  {!! Form::close() !!}
@endsection
