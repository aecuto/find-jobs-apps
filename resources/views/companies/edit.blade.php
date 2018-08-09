@extends('layouts.manager_app')

@section('active_menu')
Edit
@endsection

@section('manager_content')

@include('adminlte-templates::common.errors')

  <h1 class="display">Edit</h1>

  {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch', 'files' => true]) !!}

      @include('companies.fields')

  {!! Form::close() !!}


@endsection