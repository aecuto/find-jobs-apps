@section('active_menu')
Payment Notifications
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
<div class="card">
  <div class="card-body">


    <section class="content-header">
        <h1>
            ฟอร์มแจ้งการชำระเงิน
        </h1>
    </section>

    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'paymentNotifications.store']) !!}

        @include('payment_notifications.fields')

    {!! Form::close() !!}

  </div>
</div>
@endsection
