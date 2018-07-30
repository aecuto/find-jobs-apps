@extends('layouts.member_app')

@section('member_content')

  @include('adminlte-templates::common.errors')

  {!! Form::model($memberProfile, ['route' => ['memberProfiles.update', $memberProfile->id], 'method' => 'patch']) !!}

      @include('member_profiles.fields')

  {!! Form::close() !!}

@endsection