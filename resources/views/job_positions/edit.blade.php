@extends('layouts.manager_app')

@section('manager_content')

  @include('adminlte-templates::common.errors')

  {!! Form::model($jobPosition, ['route' => ['jobPositions.update', $jobPosition->id], 'method' => 'patch']) !!}
      @include('job_positions.fields')
  {!! Form::close() !!}

@endsection