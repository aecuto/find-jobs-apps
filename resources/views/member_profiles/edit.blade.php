@section('active_menu')
Edit
@endsection

@extends(Auth::user()->hasRole(['member'])? 'layouts.member_app': 'layouts.admin_app')

@section(Auth::user()->hasRole(['member']) ? 'member_content': 'admin_content')

  @include('adminlte-templates::common.errors')

  <div class="card">
    <div class="card-body">
      {!! Form::model($memberProfile, ['route' => ['memberProfiles.update', $memberProfile->id], 'method' => 'patch','files' => true]) !!}

          @include('member_profiles.fields')

      {!! Form::close() !!}
    </div>
  </div>  

@endsection