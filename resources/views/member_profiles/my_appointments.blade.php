@extends('layouts.member_app')

@section('active_menu')
MY APPOINTMENTS
@endsection

@section('member_content')

<table  data-toggle="table"
        data-pagination="true"
        data-page-size="10" >
  <thead>
    <tr>
      <th>งาน</th>
      <th>ประเภทงาน</th>
      <th>วัน</th>
      <th>เวลา</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      @foreach($appointments as $appointment)
      <tr>
        <td>{{ $appointment->jobname ?: '-' }}</td>
        <td>{{ $appointment->job ?: '-' }}</td>
        <td>{{ $appointment->date ?: '-' }}</td>
        <td>{{ $appointment->time ?: '-' }}</td>
        <td>
        <a href="{{ route('appointments.appointment_confirm', [$appointment->id]) }}" class="btn btn-success {{$appointment->confirmed==false ?: 'disabled'}}">{{$appointment->confirmed==false ?  'Confirm' : 'Confirmed'}}</a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
