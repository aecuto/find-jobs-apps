@section('active_menu')
REGISTERED
@endsection

@extends('layouts.member_app')

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
      @foreach($registers as $register)
      <tr>
        <td>{{ $register->jobname ?: '-' }}</td>
        <td>{{ $register->job ?: '-' }}</td>
        <td>{{ $register->company->companyname ?: '-' }}</td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
