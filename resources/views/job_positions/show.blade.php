@section('active_menu')
Job
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
<div class="card" style="margin-bottom: 10px">
    <div class="card-body">
        <h5><i class="fas fa-briefcase"></i> {!! $jobPosition->jobname !!}</h5>
        <h5><i class="far fa-building"></i> {!! $jobPosition->company->companyname !!}</h5>
        <h7>จังหวัด : {!! $jobPosition->country !!}</h7>
        <h7>เงินเดือน : {!! $jobPosition->salary !!}</h7>
    </div>
</div>

@auth
  @if(Auth::user()->authorizeRoles(['member']))
  <div class="row">
    <div class="col text-right">
      {!! Form::open(['route' => ['jobPositions.register', $jobPosition->id], 'method' => 'post']) !!}
          {!! Form::button(Auth::user()->member_register->find($jobPosition->id) ? 'สมัครงานแล้ว' : 'สมัครงาน', [
            'type' => 'submit', 
            'class' => 'btn btn-success btn-xs', 
            'disabled' => Auth::user()->member_register->find($jobPosition->id) ? true : false ,
            'onclick' => "return confirm('Are you sure?')"]) !!}
      {!! Form::close() !!}
    </div>
    <div class="col">
      {!! Form::open(['route' => ['jobPositions.star', $jobPosition->id], 'method' => 'post']) !!}
          {!! Form::button(Auth::user()->member_star->find($jobPosition->id) ? 'เก็บงานแล้ว' : 'เก็บงาน', [
            'type' => 'submit', 
            'class' => 'btn btn-info btn-xs', 
            'disabled' => Auth::user()->member_star->find($jobPosition->id) ? true : false ,
            'onclick' => "return confirm('Are you sure?')"]) !!}
      {!! Form::close() !!}
    </div>
  </div>
  @endif
@endauth

<hr> 

<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-8 text-left">
            <h3 class="card-title display">ชื่อบริษัท: {{ $jobPosition->company->companyname }}</h3>
          </div>
          <div class="col-4 text-right">
            @if($jobPosition->company->image)
            <img src="data:image/jpg;charset=utf8;base64,{!! $jobPosition->company->image !!}" width="80" class="rounded-circle" style="hight: auto;">
            @else
            <img src="{{url('/images/default.png')}}"  height="80" width="80" class="rounded-circle">
            @endif
          </div>
      </div>
    </div>
    <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <td><strong>ประเภทธุรกิจ</strong></td>
              <td>{{ $jobPosition->company->companytype }}</td>
            </tr>
            <tr>
              <td><strong>ปีที่ก่อตั้ง</strong></td>
              <td>{{ $jobPosition->company->start_year }}</td>
            </tr>
            <tr>
              <td><strong>จำนวนพนักงาน</strong></td>
              <td>{{ $jobPosition->company->worker_count }}</td>
            </tr>
            <tr>
              <td><strong>ลักษณะธุรกิจ</strong></td>
              <td>{{ $jobPosition->company->details }}</td>
            </tr>
            <tr>
              <td><strong>ที่อยู่</strong></td>
              <td>{{ $jobPosition->company->address }}</td>
            </tr>
            <tr>
              <td><strong>อีเมล์</strong></td>
              <td>{{ $jobPosition->company->email }}</td>
            </tr>
            <tr>
              <td><strong>เบอร์โทรศัพท์</strong></td>
              <td>{{ $jobPosition->company->phone }}</td>
            </tr>
            <tr>
              <td><strong>ติดต่อคุณ</strong></td>
              <td>{{ $jobPosition->company->fullname_contact }}</td>
            </tr>
            <tr>
              <td><strong>ตำแหน่ง</strong></td>
              <td>{{ $jobPosition->company->position_contact }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
    </div>
  </div>

@endsection
