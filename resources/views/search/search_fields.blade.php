<div class="row">

  <!-- Jobname Field -->
  <div class="form-group col">
      {!! Form::label('jobname', 'Jobname:') !!}
      {!! Form::text('jobname', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Companyname Field -->
  <div class="form-group col">
      {!! Form::label('companyname', 'Companyname:') !!}
      {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
  </div>

</div>

<div class="row">
  
  <!-- Job Field -->
  <div class="form-group col">
      {!! Form::label('job', 'Job:') !!}
      {!! Form::select('job', [
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

  <!-- Certificate Field -->
  <div class="form-group col">
      {!! Form::label('certificate', 'Certificate:') !!}
      <select class="form-control" name="certificate">
          <option value="">ไม่ระบุ</option>
          <option value="ปริญญาเอก">ปริญญาเอก</option>
          <option value="ปริญญาโท">ปริญญาโท</option>
          <option value="ปริญญาตรี">ปริญญาตรี</option>
          <option value="ปวส.">ปวส.</option>
          <option value="ปวช./มัธยมศึกษา">ปวช./มัธยมศึกษา</option>
          <option value="ต่ำกว่ามัธยมศึกษา">ต่ำกว่ามัธยมศึกษา</option>
      </select>
  </div>
</div>

<div class="row">

  <!-- Country Field -->
  <div class="form-group col">
      {!! Form::label('country', 'Country:') !!}
      <select class="form-control" name="country">
          <option value="">ไม่ระบุ</option>
          <option value="กระบี่">กระบี่</option>
          <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
          <option value="กาญจนบุรี">กาญจนบุรี</option>
          <option value="กาฬสินธุ์"> กาฬสินธุ์</option>
          <option value="กำแพงเพชร">กำแพงเพชร</option>
          <option value="ขอนแก่น">ขอนแก่น</option>
          <option value="จันทบุรี"> จันทบุรี</option>
          <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
          <option value="ชลบุรี"> ชลบุรี</option>
          <option value="ชัยนาท"> ชัยนาท</option>
          <option value="ชัยภูมิ"> ชัยภูมิ</option>
          <option value="ชุมพร"> ชุมพร</option>
          <option value="ตรัง">ตรัง</option>
          <option value="ตราด"> ตราด</option>
          <option value="ตาก">ตาก</option>
          <option value="นครนายก"> นครนายก</option>
          <option value="นครปฐม"> นครปฐม</option>
          <option value="นครพนม"> นครพนม</option>
          <option value="นครราชสีมา"> นครราชสีมา</option>
          <option value="นครศรีธรรมราช"> นครศรีธรรมราช</option>
          <option value="นครสวรรค์"> นครสวรรค์</option>
          <option value="นนทบุรี">นนทบุรี</option>
          <option value="นราธิวาส">นราธิวาส</option>
          <option value="น่าน"> น่าน</option>
          <option value="บุรีรัมย์"> บุรีรัมย์</option>
          <option value="ปทุมธานี"> ปทุมธานี</option>
          <option value="ประจวบคีรีขันธ์"> ประจวบคีรีขันธ์</option>
          <option value="ปราจีนบุรี"> ปราจีนบุรี</option>
          <option value="ปัตตานี"> ปัตตานี</option>
          <option value="พระนครศรีอยุธยา"> พระนครศรีอยุธยา</option>
          <option value="พะเยา">พะเยา</option>
          <option value="พังงา">พังงา</option>
          <option value="พัทลุง">พัทลุง</option>
          <option value="พิจิตร">พิจิตร</option>
          <option value="พิษณุโลก">พิษณุโลก</option>
          <option value="ภูเก็ต">ภูเก็ต</option>
          <option value="มหาสารคาม">มหาสารคาม</option>
          <option value="มุกดาหาร">มุกดาหาร</option>
          <option value="ยะลา">ยะลา</option>
          <option value="ยโสธร">ยโสธร</option>
          <option value="ระนอง">ระนอง</option>
          <option value="ระยอง">ระยอง</option>
          <option value="ราชบุรี">ราชบุรี</option>
          <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
          <option value="ลพบุรี">ลพบุรี</option>
          <option value="ลำปาง">ลำปาง</option>
          <option value="ลำพูน">ลำพูน</option>
          <option value="ศรีสะเกษ">ศรีสะเกษ</option>
          <option value="สกลนคร">สกลนคร</option>
          <option value="สงขลา">สงขลา</option>
          <option value="สตูล">สตูล</option>
          <option value="สมุทรปราการ">สมุทรปราการ</option>
          <option value="สมุทรสงคราม">สมุทรสงคราม</option>
          <option value="สมุทรสาคร">สมุทรสาคร</option>
          <option value="สระบุรี">สระบุรี</option>
          <option value="สระแก้ว">สระแก้ว</option>
          <option value="สิงห์บุรี">สิงห์บุรี</option>
          <option value="สุพรรณบุรี">สุพรรณบุรี</option>
          <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
          <option value="สุรินทร์">สุรินทร์</option>
          <option value="สุโขทัย">สุโขทัย</option>
          <option value="หนองคาย">หนองคาย</option>
          <option value="หนองบัวลำภู">หนองบัวลำภู</option>
          <option value="อำนาจเจริญ">อำนาจเจริญ</option>
          <option value="อุดรธานี">อุดรธานี</option>
          <option value="อุตรดิตถ์">อุตรดิตถ์</option>
          <option value="อุทัยธานี">อุทัยธานี</option>
          <option value="อุบลราชธานี">อุบลราชธานี</option>
          <option value="อ่างทอง">อ่างทอง</option>
          <option value="เชียงราย">เชียงราย</option>
          <option value="เชียงใหม่">เชียงใหม่</option>
          <option value="เพชรบุรี">เพชรบุรี</option>
          <option value="เพชรบูรณ์">เพชรบูรณ์</option>
          <option value="เลย">เลย</option>
          <option value="แพร่">แพร่</option>
          <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
        </select>
  </div>

  <!-- Salary Field -->
  <div class="form-group col">
      {!! Form::label('salary', 'Salary:') !!}
      <select class="form-control" name="salary">
          <option value="" selected="selected">ไม่ระบุ</option>
          <option value="น้อยกว่า 5,000">น้อยกว่า 5,000</option>
          <option value="5,001 - 6,000">5,001 - 6,000</option>
          <option value="6,001 - 7,000">6,001 - 7,000</option>
          <option value="7,001 - 8,000">7,001 - 8,000</option>
          <option value="8,001 - 9,000">8,001 - 9,000</option>
          <option value="9,001 - 10,000">9,001 - 10,000</option>
          <option value="10,001 - 12,000">10,001 - 12,000</option>
          <option value="12,001 - 15,000">12,001 - 15,000</option>
          <option value="15,001 - 20,000">15,001 - 20,000</option>
          <option value="20,001 - 30,000">20,001 - 30,000</option>
          <option value="มากกว่า 30,000">มากกว่า 30,000</option>
        </select>
  </div>

</div>

<div class="row">
    <!-- Experience Field -->
    <div class="form-group col">
        {!! Form::label('experience', 'Experience:') !!}
        <select class="form-control" name="experience">
            <option value="" selected="selected">ไม่ระบุ</option>
            <option value="1">1 ปี</option>
            <option value="2">2 ปี</option>
            <option value="3">3 ปี</option>
            <option value="4">4 ปี</option>
            <option value="5">5 ปี</option>
            <option value="6">6 ปี</option>
            <option value="7">7 ปี</option>
            <option value="8">8 ปี</option>
            <option value="9">9 ปี</option>
            <option value="10">10 ปี</option>
            <option value="11">11 ปี</option>
            <option value="12">12 ปี</option>
            <option value="13">13 ปี</option>
            <option value="14">14 ปี</option>
            <option value="15">15 ปี</option>
        </select>
    </div>
  
    <div class="form-group col">
      {!! Form::submit('Serach', array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 30px;')) !!}
    </div>
</div>
