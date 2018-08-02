@extends('layouts.admin_app')

@section('admin_content')
    <section class="content-header">
      <div class="row">
        <div class="col">
          <h1 class="text-left">Packages</h1>
        </div>
        <div class="col">
          <h1 class="text-right">
            <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('packages.create') !!}">Add New</a>
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

