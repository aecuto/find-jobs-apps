@extends('layouts.admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Government Jobs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($governmentJobs, ['route' => ['governmentJobs.update', $governmentJobs->id], 'method' => 'patch']) !!}

                        @include('government_jobs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection