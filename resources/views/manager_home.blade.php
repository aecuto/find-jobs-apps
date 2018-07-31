@extends('layouts.manager_app')

@section('active_menu')
JOB'S COMPANY
@endsection

@section('manager_content')
  <h1>JOB'S COMPANY</h1>
  <table 
  data-toggle="table"
  data-pagination="true"
  data-page-size="10"
  >
        <thead>
            <tr>
            <th>Jobname</th>
            <th>Companyname</th>
            <th>Job</th>
            <th>Salary</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobPositions as $jobPosition)
            <tr>
                <td>{!! $jobPosition->jobname ?: '-' !!}</td>
                <td>{!! $jobPosition->company->companyname ?: '-' !!}</td>
                <td>{!! $jobPosition->job ?: '-' !!}</td>
                <td>{!! $jobPosition->salary ?: '-' !!}</td>
                <td>
                    {!! Form::open(['route' => ['jobPositions.destroy', $jobPosition->id], 'method' => 'delete', 'style' => 'text-align: right;']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('jobPositions.show', [$jobPosition->id]) !!}" class='btn btn-primary btn-xs'>Show</a>
                        <a href="{!! route('jobPositions.edit', [$jobPosition->id]) !!}" class='btn btn-warning btn-xs'>Edit</a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
  </table>
@endsection
