@section('active_menu')
ANNOUNCEMENTS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
<div class="card">
  <div class="card-body">

    <section class="row">
        <h1 class="col text-left">ข่าวประกาศ</h1>
        <h1 class="col text-right">
           <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('announcements.create') !!}">เพิ่ม</a>
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('announcements.table')
    </div>
    
  </div>
</div>
@endsection

