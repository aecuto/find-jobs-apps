@section('active_menu')
Package
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header">
      <div class="row">
        <div class="col">
          <h1 class="text-left">อัตราค่าสมาชิก</h1>
        </div>
        <div class="col">
          <h1 class="text-right">
            <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('packages.create') !!}">เพิ่ม</a>
          </h1>
        </div>
      </div>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              @include('packages.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

