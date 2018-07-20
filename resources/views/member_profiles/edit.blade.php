@extends('layouts.member_app')

@section('content')
    <section class="content-header">
        <h1>
            Member Profile
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
              {!! Form::model($memberProfile, ['route' => ['memberProfiles.update', $memberProfile->id], 'method' => 'patch']) !!}

                  @include('member_profiles.fields')

              {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection