
@extends('layouts.manager_app')

@section('active_menu')
SHOW WORKERS SELECTED MY JOB
@endsection

@section('manager_content')

@include('adminlte-templates::common.errors')

<table  data-toggle="table"
        data-pagination="true"
        data-page-size="10" >
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Interested Job</th>
    </tr>
  </thead>
  <tbody>
      @foreach($workers_registered as $worker)
      <tr>
        <td>{{ $worker->fullname ?: '-' }}</td>
        <td>{{ $worker->interested_job ?: '-' }}</td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection

