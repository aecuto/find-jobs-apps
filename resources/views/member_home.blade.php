@extends('layouts.member_app')

@section('active_menu')
Member Profile
@endsection

@section('member_content')
@include('flash::message')

<div class="card">

    <div class="card-header">
      Member Infomation
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
        <h5 class="card-title">รหัสสมาชิก: {{ Auth::user()->id }}  {{ Auth::user()->member_profile->fullname }}</h5>
            <h5 class="card-title">Special</h5>
            <h5 class="card-title">Special</h5>
        </div>
        <div class="col-6">
          <h5 class="card-title">เป็นสมาชิกเมื่อ:  {{ Auth::user()->created_at }}</h5>
          <h5 class="card-title">อัพเดทใบสมัครงานล่าสุดเมื่อ:  {{ Auth::user()->updated_at }}</h5>
          <h5 class="card-title">Special</h5>
        </div>
      </div>
    </div>
</div>

<br>
<hr>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">เมนูการใช้งานต่างๆ</h5>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('memberProfiles.show', [Auth::user()->member_profile->id]) !!}" role="button">ดูใบสมัครงานของคุณ</a>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('memberProfiles.edit', [Auth::user()->member_profile->id]) !!}" role="button">แก้ไขใบสมัครงาน</a>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('search.job') !!}" role="button">สมัครงานออนไลน์</a>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('memberProfiles.registered') !!}" role="button">งานที่สมัครแล้ว</a>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('memberProfiles.stared') !!}" role="button">งานที่เก็บไว้</a>
        <a class="btn btn-secondary" style="margin-bottom: 5px;" href="{!! route('memberProfiles.my_resume') !!}" role="button">บริษัทที่เก็บใบสมัครงานของเรา</a>
        {!! Form::open(['route' => ['memberProfiles.destroy', Auth::user()->member_profile->id], 'method' => 'delete']) !!}
          {!! Form::button('ลบใบสมัครงาน', ['type' => 'submit', 'class' => 'btn btn-secondary', 'onclick' => "return confirm('Are you sure?')", "role"=>"link"]) !!}
        {!! Form::close() !!}
  </div>
</div>

@endsection
