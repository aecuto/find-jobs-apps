@extends('layouts.member_app')

@section('member_content')

  @foreach($companies as $company)
  <p>
    data: {{$company->companyname}}
  </p>
  @endforeach


@endsection
