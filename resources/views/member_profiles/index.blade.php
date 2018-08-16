@extends('layouts.admin_app')

@section('active_munu')
@endsection

@section('admin_content')
    <div class="row">
        <h1 class="col-sm text-left">ข้อมูลสมาชิก</h1>
        <h1 class="col-sm text-right">
           <a class="btn btn-primary text-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('memberProfiles.create') !!}">เพิ่ม</a>
        </h1>
    </div>
    <div class="row">
      <div class="col-sm">
          @include('member_profiles.table')
      </div>
    </div>
@endsection

