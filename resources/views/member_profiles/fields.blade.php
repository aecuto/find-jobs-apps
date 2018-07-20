<!-- Fullname Field -->
<div class="form-group ">
    {!! Form::label('fullname', 'Fullname:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group ">
    {!! Form::label('gender', 'Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', "Male", null) !!} Male
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "Female", null) !!} Female
    </label>

</div>

<!-- Status Field -->
<div class="form-group ">
    {!! Form::label('status', 'Status:') !!}
    <label class="radio-inline">
        {!! Form::radio('status', "single", null) !!} single
    </label>

    <label class="radio-inline">
        {!! Form::radio('status', "marry", null) !!} marry
    </label>

    <label class="radio-inline">
        {!! Form::radio('status', "divorce", null) !!} divorce
    </label>

</div>

<!-- Nationality Field -->
<div class="form-group ">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Religion Field -->
<div class="form-group ">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group ">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Height Field -->
<div class="form-group ">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::number('height', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Field -->
<div class="form-group ">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::number('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Military Status Field -->
<div class="form-group ">
    {!! Form::label('military_status', 'Military Status:') !!}
    {!! Form::select('military_status', ['yes' => 'yes', 'no' => 'no'], null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group ">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group ">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Interested Job Field -->
<div class="form-group ">
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
<div class="form-group ">
    {!! Form::label('type_interested_job', 'Type Interested Job:') !!}
    {!! Form::select('type_interested_job', [
      'it-technical' => 'it-technical',
      'support' => 'support',
      'admin' => 'admin',
      'programmer' => 'programmer',
      'system analyst' => 'system analyst',
      'webmaster' => 'webmaster',
      'web design' => 'web design',
      'graphic' => 'graphic',
      'หัวหน้า/ผู้ช่วย/ผู้จัดการ' => 'หัวหน้า/ผู้ช่วย/ผู้จัดการ',
      'อื่นๆ' => 'อื่นๆ',
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Money Need Field -->
<div class="form-group ">
    {!! Form::label('money_need', 'Money Need:') !!}
    {!! Form::select('money_need', [
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

<!-- Work Time Field -->
<div class="form-group ">
    {!! Form::label('work_time', 'Work Time:') !!}
    <label class="radio-inline">
        {!! Form::radio('work_time', "Full Time", null) !!} Full Time
        {!! Form::radio('work_time', "Part Time", null) !!} Part Time
    </label>

</div>

<!-- Submit Field -->
<div class="form-group ">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('member.home') !!}" class="btn btn-default">Cancel</a>
</div>



