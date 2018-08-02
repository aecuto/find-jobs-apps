
@extends('layouts.manager_app')

@section('active_menu')
SHOW SELECTED WORKERS
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
      @foreach($resumes as $resume)
      <tr>
        <td>{{ $resume->fullname ?: '-' }}</td>
        <td>{{ $resume->interested_job ?: '-' }}</td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection

