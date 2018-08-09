@extends('layouts.manager_app')

@section('active_menu')
COMPANY DETAILS
@endsection

@section('manager_content')
    <div class="row">
      <div class="col-6">
        <h1 class="text-left">ข้อมูลบริษัท</h1>
      </div>
      <div class="col-6">
        <h1 class="text-right">
            <a class="btn btn-primary text-right"  href="{!! route('companies.edit', [Auth::user()->company->id]) !!}">Edit</a>
          </h1>
      </div>
    </div>

    <hr>

    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-8 text-left">
              <h3 class="card-title display">ชื่อบริษัท: {{ $company->companyname }}</h3>
            </div>
            <div class="col-4 text-right">
                @if($company->image)
                  <img src="data:image/jpg;charset=utf8;base64,{!! $company->image !!}"  width="80" style="hight: auto;" class="rounded-circle">
                  @else
                  <img src="{{url('/images/default_company.png')}}"  height="80" width="80"  class="rounded-circle">
                @endif
            </div>
        </div>
      </div>
      <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <td><strong>ประเภทธุรกิจ</strong></td>
                <td>{{ $company->companytype }}</td>
              </tr>
              <tr>
                <td><strong>ปีที่ก่อตั้ง</strong></td>
                <td>{{ $company->start_year }}</td>
              </tr>
              <tr>
                <td><strong>จำนวนพนักงาน</strong></td>
                <td>{{ $company->worker_count }}</td>
              </tr>
              <tr>
                <td><strong>ลักษณะธุรกิจ</strong></td>
                <td>{{ $company->details }}</td>
              </tr>
              <tr>
                <td><strong>ที่อยู่</strong></td>
                <td>{{ $company->address }}</td>
              </tr>
              <tr>
                <td><strong>อีเมล์</strong></td>
                <td>{{ $company->email }}</td>
              </tr>
              <tr>
                <td><strong>เบอร์โทรศัพท์</strong></td>
                <td>{{ $company->phone }}</td>
              </tr>
              <tr>
                <td><strong>ติดต่อคุณ</strong></td>
                <td>{{ $company->fullname_contact }}</td>
              </tr>
              <tr>
                <td><strong>ตำแหน่ง</strong></td>
                <td>{{ $company->position_contact }}</td>
              </tr>
            </tbody>
          </table>
          <hr>
      </div>
    </div>


@endsection

