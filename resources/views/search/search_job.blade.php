@extends('layouts.app')

@section('active_menu')
SEARCH JOBS
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
    <div class="col-sm-10">

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
