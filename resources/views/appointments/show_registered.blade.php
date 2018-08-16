
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
      <th>ชื่อ-สกุล</th>
      <th>ชื่องาน</th>
      <th>ประเภทงาน</th>
      <th>เมนู</th>
    </tr>
  </thead>
  <tbody>
      @foreach($workers_registered as $worker)
      <tr>
        <td>{{ $worker->fullname ?: '-' }}</td>
        <td>{{ $worker->jobname ?: '-' }}</td>
        <td>{{ $worker->job ?: '-' }}</td>
        <td>
        <a href="{{ route('appointments.create', ["member_id=".$worker->user_id."&job_position_id=".$worker->job_position_id]) }}" class="btn btn-info"> นัดหมาย</a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection

