@extends('layouts.app')

@section('active_menu')
SEARCH WORKS
@endsection

@section('title')
<title>Serach</title>
@endsection

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="container">
  @include('flash::message')

  <div class="row">
    @include('layouts.menu')
    <div class="col-sm-8">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">SEARCH WORKERS</h5>
              {!! Form::open(array('url' => route('search.worker'), 'method' => 'get')) !!}
                @include('search.search_worker_fields')
              {{ Form::close() }}
            </div>
          </div>

        <hr>

        <table 
          data-toggle="table"
          data-pagination="true"
          data-page-size="10"
          data-card-view="true"
          data-smart-display="false"
          >
        <thead>
            <tr>
            <th>ชื่องาน</th>
            <th>ชื่อบริษัท</th>
            <th>จังหวัด เงินเดือน</th>
            </tr>
        </thead>
        <tbody>
        @foreach($workers as $worker)
        <tr>
          <td><h5>
            <a href="{!! route('memberProfiles.show', [$worker->id]) !!}" >
              <i class="fas fa-address-book"></i> {!! $worker->fullname?: '-' !!}
            </a>

          </h5></td>
          <td><h5><i class="fas fa-hand-holding-usd"></i> {!! $worker->salary?: '-' !!}</h5></td>
          <td><h7><i class="fas fa-transgender"></i> {!! $worker->gender?: '-' !!}  <i class="fas fa-gift"></i> {!! $worker->birthdate?: '-' !!}</h7></td>
        </tr>
        @endforeach
        </tbody>
    </table>


    </div>
  </div>

  
</div>
@include('layouts.footer')

@endsection

<style>
span.title {
    display: none !important;
}

.bootstrap-table .table:not(.table-condensed), .bootstrap-table .table:not(.table-condensed)>tbody>tr>td, .bootstrap-table .table:not(.table-condensed)>tbody>tr>th, .bootstrap-table .table:not(.table-condensed)>tfoot>tr>td, .bootstrap-table .table:not(.table-condensed)>tfoot>tr>th, .bootstrap-table .table:not(.table-condensed)>thead>tr>td{
  padding: 20px !important;
}

.fixed-table-body {
  height: auto !important;
}
</style>
