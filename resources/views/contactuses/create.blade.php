@section('active_menu')
Contact Us
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content').
<div class="card">
  <div class="card-body">

    <section class="content-header">
        <h1>
            ฟอร์มการติดต่อ ออนไลน์
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')

        {!! Form::open(['route' => 'contactuses.store']) !!}

            @include('contactuses.fields')

        {!! Form::close() !!}

    </div>

  </div>
</div>

@endsection
