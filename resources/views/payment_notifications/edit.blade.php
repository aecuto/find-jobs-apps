@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment Notification
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($paymentNotification, ['route' => ['paymentNotifications.update', $paymentNotification->id], 'method' => 'patch']) !!}

                        @include('payment_notifications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection