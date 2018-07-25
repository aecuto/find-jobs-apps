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
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      </div>
    </div>
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
            </tr>
        </thead>
        <tbody>
        @foreach($jobResult as $job)
        <tr>
          <td><h5><i class="fas fa-briefcase"></i> {!! $job->jobname?: '-' !!}</h5></td>
          <td><h5><i class="far fa-building"></i> {!! $job->company->companyname?: '-' !!}</h5></td>
          <td><h7>จังหวัด: {!! $job->country?: '-' !!} เงินเดือน: {!! $job->salary?: '-' !!}</h7></td>
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
