<div class="row">
  <!-- Fullname Field -->
  <div class="form-group col">
      {!! Form::label('fullname', 'Fullname:') !!}
      {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Gender Field -->
  <div class="form-group col">
      {!! Form::label('gender', 'Gender:') !!}
      <div class="col">
        {!! Form::radio('gender', "ชาย", null) !!} ชาย
      </div>
      <div class="col">
        {!! Form::radio('gender', "หญืง", null) !!} หญืง
      </div>
  </div>

  <!-- Status Field -->
  <div class="form-group col">
      {!! Form::label('status', 'Status:') !!}

      <div class="col">
      {!! Form::radio('status', "โสด", null) !!} โสด
      </div>
      <div class="col">
      {!! Form::radio('status', "แต่งงาน", null) !!} แต่งงาน
      </div>
      <div class="col">
      {!! Form::radio('status', "หย่าร้าง", null) !!} หย่าร้าง
      </div>

  </div>
</div>


<div class="row">
  <!-- Nationality Field -->
<div class="form-group col">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Religion Field -->
<div class="form-group col">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">
  <!-- Height Field -->
<div class="form-group col">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::number('height', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Field -->
<div class="form-group col">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::number('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Military Status Field -->
<div class="form-group col">
    {!! Form::label('military_status', 'Military Status:') !!}
    {!! Form::select('military_status', [
      
				"ผ่านการเกณฑ์ทหาร" => "ผ่านการเกณฑ์ทหาร",
        "รอการเกณฑ์ทหาร" => "รอการเกณฑ์ทหาร",
        "อยู่ระหว่างการผ่อนผัน" => "อยู่ระหว่างการผ่อนผัน", 
        "ได้รับการยกเว้น" => "ได้รับการยกเว้น", 
        "ผ่านการเกณฑ์ทหาร" => "ผ่านการเกณฑ์ทหาร", 
        "เคยรับราชการทหาร" => "เคยรับราชการทหาร",

      ], null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">

<!-- Phone Field -->
<div class="form-group col">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Interested Job Field -->
<div class="form-group col">
    {!! Form::label('interested_job', 'Interested Job:') !!}
    {!! Form::select('interested_job', [
      'การตลาด/การขาย' => 'การตลาด/การขาย',
      'บริการลูกค้า/ประชาสัมพันธ์' => 'บริการลูกค้า/ประชาสัมพันธ์',
      'เลขานุการ/ธุรการ/ประสานงาน' => 'เลขานุการ/ธุรการ/ประสานงาน',
      'คอมพิวเตอร์' => 'คอมพิวเตอร์',
      'บุคคล/ฝึกอบรม/จป.วิชาชีพ' => 'บุคคล/ฝึกอบรม/จป.วิชาชีพ',
      'นำเข้า-ส่งออก' => 'นำเข้า-ส่งออก',
      'จัดซื้อ/คลังสินค้า/logistic' => 'จัดซื้อ/คลังสินค้า/logistic',
      'บัญชี/การเงิน' => 'บัญชี/การเงิน',
      'ผลิต/ควบคุมคุณภาพ/โรงงาน' => 'ผลิต/ควบคุมคุณภาพ/โรงงาน',
      'สุขภาพ/ความงาม/ฟิตเนส/สปา' => 'สุขภาพ/ความงาม/ฟิตเนส/สปา',
      'อาหาร-เครื่องดื่ม/กุ๊ก' => 'อาหาร-เครื่องดื่ม/กุ๊ก',
      'โยธา/สถาปัตย์/ตกแต่งภายใน' => 'โยธา/สถาปัตย์/ตกแต่งภายใน',
      'เขียนแบบ/ออกแบบผลิตภัณฑ์' => 'เขียนแบบ/ออกแบบผลิตภัณฑ์',
      'งานช่าง' => 'งานช่าง',
      'ส่งเอกสาร/ขับรถ/ส่งของ' => 'ส่งเอกสาร/ขับรถ/ส่งของ',
      'รปภ./แม่บ้าน/จัดสวน' => 'รปภ./แม่บ้าน/จัดสวน',
      'มัคคุเทศก์/ล่าม/จองห้องพัก/ตั๋ว' => 'มัคคุเทศก์/ล่าม/จองห้องพัก/ตั๋ว',
      'เสื้อผ้า/สิ่งทอ/designer' => 'เสื้อผ้า/สิ่งทอ/designer',
      'จิวเวลลี่/เครื่องประดับ' => 'จิวเวลลี่/เครื่องประดับ',
      'กฎหมาย' => 'กฎหมาย',
      'เกษตร' => 'เกษตร',
      'งานบันเทิง/นักร้อง/นักแสดง/พริตตี้' => 'งานบันเทิง/นักร้อง/นักแสดง/พริตตี้',
      'แพทย์/เภสัชกร' => 'แพทย์/เภสัชกร',
      'พัฒนาธุรกิจ/พัฒนาองค์กร/ISO' => 'พัฒนาธุรกิจ/พัฒนาองค์กร/ISO',
      'ผู้จัดการ/ผู้อำนวยการ/ที่ปรึกษา' => 'ผู้จัดการ/ผู้อำนวยการ/ที่ปรึกษา',
      'วิจัย/วิเคราะห์' => 'วิจัย/วิเคราะห์',
      'เศรษฐศาสตร์/หุ้น/ธนาคาร' => 'เศรษฐศาสตร์/หุ้น/ธนาคาร',
      'งานเขียน/บรรณาธิการ/แปลภาษา' => 'งานเขียน/บรรณาธิการ/แปลภาษา',	
      'ช่างภาพ/โฆษณา/creative' => 'ช่างภาพ/โฆษณา/creative',
      'สื่อสารมวลชน/ทีวี/วิทยุ/น.ส.พ.' => 'สื่อสารมวลชน/ทีวี/วิทยุ/น.ส.พ.',
      'อาจารย์/ครู/งานวิชาการ' => 'อาจารย์/ครู/งานวิชาการ',
      'งาน part time/ฝึกงาน' => 'งาน part time/ฝึกงาน',									
      'อื่นๆ' => 'อื่นๆ',
      ], null, ['class' => 'form-control']) !!}
</div>

  <!-- Type Interested Job Field -->
  <div class="form-group col">
      {!! Form::label('keyword_interested_job', 'Keyword Interested Job:') !!}
      {!! Form::text('keyword_interested_job', null, ['class' => 'form-control']) !!}
  </div>

</div>


<div class="row">
  <!-- Experience Field -->
  <div class="form-group col">
      {!! Form::label('experience', 'Experience:') !!}
      {!! Form::select('experience', [
        "ไม่ระบุ" => "ไม่ระบุ",
          "1 ปี" => "1 ปี",
          "2 ปี" => "2 ปี",
          "3 ปี" => "3 ปี",
          "4 ปี" => "4 ปี",
          "5 ปี" => "5 ปี",
          "6 ปี" => "6 ปี",
          "7 ปี" => "7 ปี",
          "8 ปี" => "8 ปี",
          "9 ปี" => "9 ปี",
          "10 ปี" => "10 ปี",
          "11 ปี" => "11 ปี",
          "12 ปี" => "12 ปี",
          "13 ปี" => "13 ปี",
          "14 ปี" => "14 ปี",
          "15 ปี" => "15 ปี",
      ], null, ['class' => 'form-control']) !!}
  </div>


<!-- Money Need Field -->
<div class="form-group col">
    {!! Form::label('salary', 'Money Need:') !!}
    {!! Form::select('salary', [
      'ไม่ระบุ' => 'ไม่ระบุ',
      'น้อยกว่า 5,000' => 'น้อยกว่า 5,000',
      '5,001 - 6,000' => '5,001 - 6,000',
      '6,001 - 7,000' => '6,001 - 7,000',
      '7,001 - 8,000' => '7,001 - 8,000',
      '8,001 - 9,000' => '8,001 - 9,000',
      '9,001 - 10,000' => '9,001 - 10,000',
      '10,001 - 12,000' => '10,001 - 12,000',
      '12,001 - 15,000' => '12,001 - 15,000',
      '15,001 - 20,000' => '15,001 - 20,000',
      '20,001 - 30,000' => '20,001 - 30,000',
      'มากกว่า 30,000' => 'มากกว่า 30,000'
      ], null, ['class' => 'form-control']) !!}
</div>

<!-- Certificate Field -->
<div class="form-group col">
    {!! Form::label('certificate', 'Certificate:') !!}
    {!! Form::select('certificate', [
        "ไม่ระบุ" => "ไม่ระบุ",
        "ปริญญาเอก" => "ปริญญาเอก",
        "ปริญญาโท" => "ปริญญาโท",
        "ปริญญาตรี" => "ปริญญาตรี",
        "ปวส." => "ปวส.",
        "ปวช./มัธยมศึกษา" => "ปวช./มัธยมศึกษา",
        "ต่ำกว่ามัธยมศึกษา" => "ต่ำกว่ามัธยมศึกษา",
    ], null, ['class' => 'form-control']) !!}
    
</div>

</div>

<div class="row">
<!-- Work Time Field -->
<div class="form-group col-3" >
    {!! Form::label('work_time', 'Work Time:') !!}

    <div class="col">
        {!! Form::radio('work_time', "งานประจำ", null) !!} งานประจำ 
    </div>
    <div class="col">
        {!! Form::radio('work_time', "งานชั่วคราว", null) !!} งานชั่วคราว 
    </div>
    <div class="col">
        {!! Form::radio('work_time', "งานนอกเวลา", null) !!} งานนอกเวลา 
    </div>

</div>

  <!-- Address Field -->
  <div class="form-group col-5">
      {!! Form::label('address', 'Address:') !!}
      {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '3']) !!}
  </div>

  <div class="form-group col-4">
      {!! Form::label('image', 'Image:') !!}
      {!! Form::file('image', null, ['class' => 'form-control']) !!}
      {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block','style' => 'margin-top: 5px;']) !!}
  </div>

</div>




