@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header">
        <h1 class="pull-left">Advertisings</h1>
    </section>
    <div class="content">
      @include('advertisings.table')
    </div>
@endsection

