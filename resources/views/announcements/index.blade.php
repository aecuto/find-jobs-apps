@section('active_menu')
ANNOUNCEMENTS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="row">
        <h1 class="col text-left">Announcements</h1>
        <h1 class="col text-right">
           <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('announcements.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('announcements.table')
    </div>
@endsection

