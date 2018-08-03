@extends('layouts.admin_app')

<style>
  .card{
    margin-bottom: 10px;
    text-align: center;
  }
</style>

@section('admin_content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>

  <div class="row">
    <div class="col">
      <div class="card text-white bg-primary">
        <div class="card-body">
            <blockquote class="blockquote mb-10">
                <p>Announcements</p>
                <h1 class="display-1">{{$announcement_count}}</h1>
            </blockquote>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card text-white bg-success">
          <div class="card-body">
              <blockquote class="blockquote mb-10">
                  <p>Government Jobs</p>
                  <h1 class="display-1">{{$government_jobs_count}}</h1>
              </blockquote>
          </div>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col">
        <div class="card text-white bg-warning">
          <div class="card-body">
              <blockquote class="blockquote mb-10">
                  <p>Payment Notification</p>
              <h1 class="display-1">{{$payment_notification_count}}</h1>
              </blockquote>
          </div>
        </div>
      </div>
      <div class="col">
          <div class="card text-white bg-danger">
            <div class="card-body">
                <blockquote class="blockquote mb-10">
                    <p>Contacts</p>
                <h1 class="display-1">{{ $contact_count }}</h1>
                </blockquote>
            </div>
          </div>
      </div>
    </div>

@endsection
