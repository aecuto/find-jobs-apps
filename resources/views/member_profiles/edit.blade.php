@extends(Auth::user()->hasRole(['member'])? 'layouts.member_app': 'layouts.admin_app')

@section(Auth::user()->hasRole(['member']) ? 'member_content': 'admin_content')

  @include('adminlte-templates::common.errors')

  {!! Form::model($memberProfile, ['route' => ['memberProfiles.update', $memberProfile->id], 'method' => 'patch']) !!}

      @include('member_profiles.fields')

  {!! Form::close() !!}

@endsection