
<div class="row">

    <div class="col-2 text-center">
      @if($memberProfile->image)
      <img src="data:image/jpg;charset=utf8;base64,{!! $memberProfile->image !!}"  height="80" width="80" alt="avatar_profile">
      @else
      <img src="{{url('/images/default.png')}}"  height="80" width="80" alt="avatar_profile">
      @endif
    </div>

    <div class="col-10">

      <div class="col">
          <h6>ประเภทงานที่สนใจ : {!! $memberProfile->interested_job !!}</h6>
        </div>
        <div class="col">
            <h6>ตำแหน่งงานที่สนใจ: {!! $memberProfile->type_interested_job !!}</h6>
          </div>
        <div class="col">
            <h6>ระดับเงินเดือนที่ต้องการ:	{!! $memberProfile->money_need !!}</h6>
        </div>
        <div class="col">
            <h6>เวลา:	{!! $memberProfile->work_time !!}</h6>
        </div>

    </div>

</div> 

<hr>

<div class="row">

  <div class="col-12">
    <div class="row">
      <div class="col-6 text-left">
        <h5 class="font-weight-bold">รหัสใบสมัคร: {!! $memberProfile->id !!}</h5>
      </div>
      <div class="col-6 text-right">
          <h5 class="font-weight-bold">ข้อมูลส่วนตัว</h5>
      </div>
    </div>
  </div>

  <div class="col-6">
    <h6>ชื่อ-สกุล: {!! $memberProfile->fullname ?: '-' !!}</h6>
    <h6>เพศ: {!! $memberProfile->gender ?: '-' !!}</h6>
    <h6>สถานะการสมรส: {!! $memberProfile->status ?: '-' !!}</h6>
    <h6>วัน-เดือน-ปี เกิด: {!! $memberProfile->birthdate ?: '-' !!}</h6>
    <h6>สัญชาติ: {!! $memberProfile->nationality ?: '-' !!}</h6>
  </div>
  <div class="col-6">
      <h6>ศาสนา: {!! $memberProfile->religion ?: '-' !!}</h6>
      <h6>ส่วนสูง:	{!! $memberProfile->height ?: '-' !!}</h6>
      <h6>น้ำหนัก: {!! $memberProfile->weight ?: '-' !!}</h6>
      <h6>สถานะภาพทางทหาร: {!! $memberProfile->military_status ?: '-' !!}</h6>
  </div>
</div>
<hr>
<div class="row">
    <div class="col-12 text-right">
      <h5 class="font-weight-bold">ข้อมูลการติดต่อ</h5>
    </div>
  
    <div class="col-6">
      <h6>เบอร์โทรศัพท์: {!! $memberProfile->phone ?: '-' !!}</h6>
    </div>
    <div class="col-6">
      <h6>ที่อยู่: {!! $memberProfile->address ?: '-' !!}</h6>
    </div>
</div>