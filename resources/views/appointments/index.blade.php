@section('active_menu')
APPOINTMENTS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header row">
        <h1 class="col text-left">Appointments</h1>
        <h1 class="col text-right">
          <a href="{{ route('appointments.show_registered') }}" class="btn btn-primary"> Add </a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('appointments.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

