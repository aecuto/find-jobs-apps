<div class="row">

    <div class="col-3">
      <h5>ประเภทงานที่สนใจ : {!! $memberProfile->interested_job !!}</h5>
    </div>
    <div class="col-3">
        <h5>ตำแหน่งงานที่สนใจ: {!! $memberProfile->type_interested_job !!}</h5>
      </div>
    <div class="col-3">
        <h5>ระดับเงินเดือนที่ต้องการ:	{!! $memberProfile->money_need !!}</h5>
    </div>
    <div class="col-3">
        <h5>เวลา:	{!! $memberProfile->work_time !!}</h5>
    </div>
</div> 

<hr>

<div class="row">

  <div class="col-12">
    <div class="row">
      <div class="col-6 text-left">
        <h5>รหัสใบสมัคร: {!! $memberProfile->id !!}</h5>
      </div>
      <div class="col-6 text-right">
          <h5>ข้อมูลส่วนตัว</h5>
      </div>
    </div>
  </div>

  <div class="col-4">
    <h5>ชื่อ-สกุล: {!! $memberProfile->fullname !!}</h5>
    <h5>เพศ: {!! $memberProfile->gender !!}</h5>
    <h5>สถานะการสมรส: {!! $memberProfile->status !!}</h5>
  </div>
  <div class="col-4">
      <h5>วัน-เดือน-ปี เกิด: {!! $memberProfile->birthdate !!}</h5>
      <h5>สัญชาติ: {!! $memberProfile->nationality !!}</h5>
      <h5>ศาสนา: {!! $memberProfile->religion !!}</h5>
    </div>
  <div class="col-4">
      <h5>ส่วนสูง:	{!! $memberProfile->height !!}</h5>
      <h5>น้ำหนัก: {!! $memberProfile->weight !!}</h5>
      <h5>สถานะภาพทางทหาร: {!! $memberProfile->military_status !!}</h5>
  </div>
</div>

้<hr>
<div class="row">
    <div class="col-12 text-right">
      <h5>ข้อมูลการติดต่อ</h5>
    </div>
  
    <div class="col-6">
      <h5>เบอร์โทรศัพท์: {!! $memberProfile->fullname !!}</h5>
    </div>
    <div class="col-6">
      <h5>ที่อยู่: {!! $memberProfile->address !!}</h5>
    </div>
</div>