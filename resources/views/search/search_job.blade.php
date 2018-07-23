@extends('layouts.app')

@section('content')
@include('flash::message')

<h1 class="display">SEARCH JOBS</h1>

{!! Form::open(array('url' => route('search.job'), 'method' => 'get')) !!}
  @include('search.search_fields')
{{ Form::close() }}

<table class="table">
    <thead>
        <tr>
        <th>Jobname</th>
        <th>Companyname</th>
        <th>Job</th>
        <th>Certificate</th>
        <th>Country</th>
        <th>Salary</th>
        <th>Experience</th>
        <th>Map</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobResult as $job)
        <tr>
            <td>{!! $job->jobname !!}</td>
            <td>{!! $job->companyname !!}</td>
            <td>{!! $job->job !!}</td>
            <td>{!! $job->certificate !!}</td>
            <td>{!! $job->country !!}</td>
            <td>{!! $job->salary !!}</td>
            <td>{!! $job->experience !!}</td>
            <td>{!! $job->map !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
