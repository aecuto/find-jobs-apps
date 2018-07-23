@extends('layouts.manager_app')

@section('content')
@include('flash::message')

<h1>My Job</h1>

<table class="table" id="jobPositions-table">
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
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobPositions as $jobPosition)
        <tr>
            <td>{!! $jobPosition->jobname !!}</td>
            <td>{!! $jobPosition->companyname !!}</td>
            <td>{!! $jobPosition->job !!}</td>
            <td>{!! $jobPosition->certificate !!}</td>
            <td>{!! $jobPosition->country !!}</td>
            <td>{!! $jobPosition->salary !!}</td>
            <td>{!! $jobPosition->experience !!}</td>
            <td>{!! $jobPosition->map !!}</td>
            <td>
                {!! Form::open(['route' => ['jobPositions.destroy', $jobPosition->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobPositions.show', [$jobPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobPositions.edit', [$jobPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
