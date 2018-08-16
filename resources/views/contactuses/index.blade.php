

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header">
        <h1 class="pull-left">ติดต่อเว็บไซต์</h1>
    </section>
    @include('contactuses.table')
@endsection

