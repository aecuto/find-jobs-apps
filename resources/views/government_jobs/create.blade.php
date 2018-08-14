

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
<div class="card">
  <div class="card-body">

    <section class="content-header">
        <h1>
          ตำแหน่งงานราชการ รัฐวิสาหกิจ
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                  
                        {!! Form::open(['route' => 'governmentJobs.store']) !!}

                            @include('government_jobs.fields')

                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    
  </div>
</div>
@endsection
