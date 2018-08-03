
@section('active_menu')
Payment Notifications
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')

    <section class="content-header">
        <h1 class="pull-left">Payment Notifications</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @include('payment_notifications.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

