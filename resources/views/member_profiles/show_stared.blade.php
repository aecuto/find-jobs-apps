@extends('layouts.member_app')

@section('active_menu')
STARED
@endsection

@section('member_content')

<table  data-toggle="table"
        data-pagination="true"
        data-page-size="10" >
  <thead>
    <tr>
      <th>Job Name</th>
      <th>Job Type</th>
      <th>Company Name</th>
    </tr>
  </thead>
  <tbody>
      @foreach($stars as $star)
      <tr>
        <td>{{ $star->jobname ?: '-' }}</td>
        <td>{{ $star->job ?: '-' }}</td>
        <td>{{ $star->company->companyname ?: '-' }}</td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
