@extends('layouts.admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Announcements
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($announcements, ['route' => ['announcements.update', $announcements->id], 'method' => 'patch']) !!}

                        @include('announcements.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection