@extends('layouts.member_app')

@section('active_menu')
COMPANY VEIWED'S RESUME
@endsection

@section('member_content')

<table  data-toggle="table"
        data-pagination="true"
        data-page-size="10" >
  <thead>
    <tr>
      <th>ชื่อบริษัท</th>
      <th>รายละเอียด</th>
    </tr>
  </thead>
  <tbody>
      @foreach($companies as $company)
      <tr>
        <td>{{ $company->companyname ?: '-' }}</td>
        <td>{{ $company->details ?: '-' }}</td>
      </tr>
      @endforeach
  </tbody>
</table>

@endsection
