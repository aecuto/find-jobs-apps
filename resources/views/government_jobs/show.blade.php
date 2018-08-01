@extends('layouts.'.$role.'_app')

@section('active_menu')
GOVERNMENT JOBS
@endsection

@section($role.'_content')
    <section class="content-header">
        <h1>
            Government Jobs
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('government_jobs.show_fields')
                    <a href="{!! route('governmentJobs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
