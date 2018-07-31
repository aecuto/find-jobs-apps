@extends('layouts.member_app')

@section('active_menu')
COMPANY VEIWED'S RESUME
@endsection

@section('member_content')

  @foreach($companies as $company)
  <p>
    data: {{$company->companyname}}
  </p>
  @endforeach


@endsection
