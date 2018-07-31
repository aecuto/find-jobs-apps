@extends('layouts.app')

@section('active_menu')
SEARCH JOBS
@endsection

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
    @include('layouts.menu')
    <div class="col-8">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">SEARCH JOBS</h5>
              {!! Form::open(array('url' => route('search.job'), 'method' => 'get')) !!}
                @include('search.search_fields')
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
            <th>เวลสประกาศ</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobResult as $job)
        <tr>
          <td><h5>
            <a href="{!! route('jobPositions.show', [$job->id]) !!}" >
              <i class="fas fa-briefcase"></i> {!! $job->jobname?: '-' !!}
            </a>

          </h5></td>
          <td><h5><i class="far fa-building"></i> {!! $job->company->companyname?: '-' !!}</h5></td>
          <td><h6>จังหวัด: {!! $job->country?: '-' !!} เงินเดือน: {!! $job->salary?: '-' !!}</h6></td>
          <td>
            <h6><i class="fas fa-clock"></i> {!! date('d-m-Y', strtotime($job->start_date))?: '-' !!} - {!! date('d-m-Y', strtotime($job->end_date))?: '-' !!}</h6> 
          </td>  
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
