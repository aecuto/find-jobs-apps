@extends('layouts.manager_app')

@section('content')
    <section class="content-header">
        <h1>
            Job Position
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')

        {!! Form::open(['route' => 'jobPositions.store']) !!}

            @include('job_positions.fields')

        {!! Form::close() !!}
    </div>
@endsection
