@extends('layouts.app')

@section('title')
<title>Serach</title>
@endsection

@section('navbar')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal">Jobs TH</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Home</a>
  </nav>
  @if (Route::has('login'))
    @auth
      <a class="btn btn-outline-primary" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    @endauth
  @endif
</div>
@endsection

@section('content')
<div class="container">
  @include('flash::message')

  <div class="row">
    <div class="col-4">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" href="/search_job" >SEARCH JOBS</a>
            <a class="nav-link active" href="/search_worker">SEARCH WORKERS</a>
        </div>
    </div>
    <div class="col-8">

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
