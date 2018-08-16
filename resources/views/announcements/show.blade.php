
@section('active_menu')
ANNOUNCEMENTS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header">
        <h1>
            Announcements
        </h1>
    </section>

    <div class="row">
        <div class="col text-center">
          @include('announcements.show_fields')
        </div>
    </div>
    <div class="row">
        <a href="{!! route('announcements.index') !!}" class="btn btn-primary btn-block">Back</a>
    </div>
    
@endsection
