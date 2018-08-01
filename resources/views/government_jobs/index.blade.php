@extends('layouts.'.$role.'_app')

@section('active_menu')
GOVERNMENT JOBS
@endsection

@section($role.'_content')
    <section class="row">
        <h1 class="col">Government Jobs</h1>
        <h1 class="col text-right">
          @auth
            @if(Auth::user()->hasRole(['admin']))
              <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('governmentJobs.create') !!}">Add New</a>
            @endif
          @endauth
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               @include('government_jobs.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

