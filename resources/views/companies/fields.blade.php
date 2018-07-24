<div class="row">
  <!-- Companyname Field -->
<div class="form-group col">
    {!! Form::label('companyname', 'Companyname:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
</div>

<!-- Companytype Field -->
<div class="form-group col">
    {!! Form::label('companytype', 'Companytype:') !!}
    {!! Form::select('companytype', [
      "ประเภทธุรกิจ" => "ประเภทธุรกิจ",
      "โรงแรม/ที่พัก" => "โรงแรม/ที่พัก",
      "ท่องเที่ยว/ทัวร์" => "ท่องเที่ยว/ทัวร์",
      "สถานบันเทิง/ร้านอาหาร" => "สถานบันเทิง/ร้านอาหาร",
      "อาหาร/เครื่องดื่ม" => "อาหาร/เครื่องดื่ม",
      "คอมพิวเตอร์/เทคโนโลยี/เครื่องใช้ไฟฟ้า" => "คอมพิวเตอร์/เทคโนโลยี/เครื่องใช้ไฟฟ้า",
      "การศึกษา/เครื่องเขียน/แบบเรียน" => "การศึกษา/เครื่องเขียน/แบบเรียน",
      "กฎหมาย/บัญชี" => "กฎหมาย/บัญชี",
      "โรงพยาบาล/เครื่องมือแพทย์/ยา" => "โรงพยาบาล/เครื่องมือแพทย์/ยา",
      "นำเข้า-ส่งออก/ธุรกิจระหว่างประเทศ" => "นำเข้า-ส่งออก/ธุรกิจระหว่างประเทศ",
      "โรงงานอุตสาหกรรม" => "โรงงานอุตสาหกรรม",
      "ความงาม/สปา/เครื่องสำอาง" => "ความงาม/สปา/เครื่องสำอาง",
      "เฟอร์นิเจอร์/ของตกแต่ง/หัตถกรรม" => "เฟอร์นิเจอร์/ของตกแต่ง/หัตถกรรม",
      "ออกแบบ/ตกแต่งภายใน/จัดสวน" => "ออกแบบ/ตกแต่งภายใน/จัดสวน",
      "โฆษณา/อีเว้นท์/สตูดิโอ" => "โฆษณา/อีเว้นท์/สตูดิโอ",
      "ห้างสรรพสินค้า/ค้าปลีก-ค้าส่ง" => "ห้างสรรพสินค้า/ค้าปลีก-ค้าส่ง",
      "ยานยนต์/ประดับยนต์" => "ยานยนต์/ประดับยนต์",
      "ก่อสร้าง/วัสดุก่อสร้าง/อสังหาริมทรัพย์" => "ก่อสร้าง/วัสดุก่อสร้าง/อสังหาริมทรัพย์",
      "ขนส่ง/ขนย้าย" => "ขนส่ง/ขนย้าย",
      "เสื้อผ้า/สิ่งทอ" => "เสื้อผ้า/สิ่งทอ",
      "เครื่องประดับ/อัญมณี" => "เครื่องประดับ/อัญมณี",
      "การเกษตร" => "การเกษตร",
      "ธนาคาร/การเงิน/การประกัน/สินเชื่อ" => "ธนาคาร/การเงิน/การประกัน/สินเชื่อ",
      "ขายตรง/เครือข่าย/MLM" => "ขายตรง/เครือข่าย/MLM",
      "สิ่งพิมพ์/สื่อสารมวลชน" => "สิ่งพิมพ์/สื่อสารมวลชน",
      "สื่อสาร/โทรคมนาคม" => "สื่อสาร/โทรคมนาคม",
      "รปภ./รักษาความสะอาด/ซักรีด/กำจัดแมลง" => "รปภ./รักษาความสะอาด/ซักรีด/กำจัดแมลง",
      "อุตสาหกรรมพลาสติก-เคมี" => "อุตสาหกรรมพลาสติก-เคมี",
      "อุตสาหกรรมโลหะ-เหล็ก" => "อุตสาหกรรมโลหะ-เหล็ก",
      "ราชการ/รัฐวิสาหกิจ/มูลนิธิ/องค์กร" => "ราชการ/รัฐวิสาหกิจ/มูลนิธิ/องค์กร",
      "อื่นๆ" => "อื่นๆ"
       ], null, ['class' => 'form-control']) !!}
</div>
</div>


<div class="row">

  <!-- Worker Count Field -->
  <div class="form-group col">
      {!! Form::label('worker_count', 'Worker Count:') !!}
      {!! Form::select('worker_count', [
        "โปรดเลือก" => "โปรดเลือก",
        "1 - 5 คน" => "1 - 5 คน",
        "5 - 20 คน" => "5 - 20 คน",
        "20 - 50 คน" => "20 - 50 คน",
        "50 - 100 คน" => "50 - 100 คน",
        "100 - 200 คน" => "100 - 200 คน",
        "200 - 500 คน" => "200 - 500 คน",
        "500 - 1,000 คน" => "500 - 1,000 คน",
        "มากกว่า 1,000 คน" => "มากกว่า 1,000 คน"
      ], null, ['class' => 'form-control']) !!}
  </div>

<!-- Start Year Field -->
<div class="form-group col">
    {!! Form::label('start_year', 'Start Year:') !!}
    <select name="start_year" class="form-control text">

        <option value="" selected="selected">ปีที่ก่อตั้ง</option>

        <option value="2561">2561</option><option value="2560">2560</option><option value="2559">2559</option><option value="2558">2558</option><option value="2557">2557</option><option value="2556">2556</option><option value="2555">2555</option><option value="2554">2554</option><option value="2553">2553</option><option value="2552">2552</option><option value="2551">2551</option><option value="2550">2550</option><option value="2549">2549</option><option value="2548">2548</option><option value="2547">2547</option><option value="2546">2546</option><option value="2545">2545</option><option value="2544">2544</option><option value="2543">2543</option><option value="2542">2542</option><option value="2541">2541</option><option value="2540">2540</option><option value="2539">2539</option><option value="2538">2538</option><option value="2537">2537</option><option value="2536">2536</option><option value="2535">2535</option><option value="2534">2534</option><option value="2533">2533</option><option value="2532">2532</option><option value="2531">2531</option><option value="2530">2530</option><option value="2529">2529</option><option value="2528">2528</option><option value="2527">2527</option><option value="2526">2526</option><option value="2525">2525</option><option value="2524">2524</option><option value="2523">2523</option><option value="2522">2522</option><option value="2521">2521</option><option value="2520">2520</option><option value="2519">2519</option><option value="2518">2518</option><option value="2517">2517</option><option value="2516">2516</option><option value="2515">2515</option><option value="2514">2514</option><option value="2513">2513</option><option value="2512">2512</option><option value="2511">2511</option><option value="2510">2510</option><option value="2509">2509</option><option value="2508">2508</option><option value="2507">2507</option><option value="2506">2506</option><option value="2505">2505</option><option value="2504">2504</option><option value="2503">2503</option><option value="2502">2502</option><option value="2501">2501</option><option value="2500">2500</option><option value="2499">2499</option><option value="2498">2498</option><option value="2497">2497</option><option value="2496">2496</option><option value="2495">2495</option><option value="2494">2494</option><option value="2493">2493</option><option value="2492">2492</option><option value="2491">2491</option><option value="2490">2490</option><option value="2489">2489</option><option value="2488">2488</option><option value="2487">2487</option><option value="2486">2486</option><option value="2485">2485</option><option value="2484">2484</option><option value="2483">2483</option><option value="2482">2482</option><option value="2481">2481</option><option value="2480">2480</option><option value="2479">2479</option><option value="2478">2478</option><option value="2477">2477</option><option value="2476">2476</option><option value="2475">2475</option><option value="2474">2474</option><option value="2473">2473</option><option value="2472">2472</option><option value="2471">2471</option><option value="2470">2470</option><option value="2469">2469</option><option value="2468">2468</option><option value="2467">2467</option><option value="2466">2466</option><option value="2465">2465</option><option value="2464">2464</option><option value="2463">2463</option><option value="2462">2462</option><option value="2461">2461</option>
        <option value="101">มากกว่า 100 ปี</option>

        </select>
</div>
</div>

<div class="row">
  <!-- Details Field -->
  <div class="form-group col">
      {!! Form::label('details', 'Details:') !!}
      {!! Form::textarea('details', null, ['class' => 'form-control', 'rows' => '5']) !!}
  </div>

<!-- Address Field -->
<div class="form-group col">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>
</div>


<div class="row">
  <!-- Country Field -->
<div class="form-group col">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', [
              "ไม่ระบุ" => "ไม่ระบุ",
              "กระบี่" => "กระบี่",
              "กรุงเทพมหานคร" => "กรุงเทพมหานคร",
              "กาญจนบุรี" => "กาญจนบุรี",
              " กาฬสินธุ์" => " กาฬสินธุ์",
              "กำแพงเพชร" => "กำแพงเพชร",
              "ขอนแก่น" => "ขอนแก่น",
              "จันทบุรี" => "จันทบุรี",
              "ฉะเชิงเทรา" => "ฉะเชิงเทรา",
              "ชลบุรี" => "ชลบุรี",
              "ชัยนาท" => "ชัยนาท",
              "ชัยภูมิ" => "ชัยภูมิ",
              "ชุมพร" => "ชุมพร",
              "ตรัง" => "ตรัง",
              "ตราด" => "ตราด",
              "ตาก" => "ตาก",
              "นครนายก" => "นครนายก",
              "นครปฐม" => "นครปฐม",
              "นครพนม" => "นครพนม",
              "นครราชสีมา" => "นครราชสีมา",
              "นครศรีธรรมราช" => "นครศรีธรรมราช",
              "นครสวรรค์" => "นครสวรรค์",
              "นนทบุรี" => "นนทบุรี",
              "นราธิวาส" => "นราธิวาส",
              "น่าน" => "น่าน",
              "บุรีรัมย์" => "บุรีรัมย์",
              "ปทุมธานี" => "ปทุมธานี",
              "ประจวบคีรีขันธ์" => "ประจวบคีรีขันธ์",
              "ปราจีนบุรี" => "ปราจีนบุรี",
              "ปัตตานี" => "ปัตตานี",
              "พระนครศรีอยุธยา" => "พระนครศรีอยุธยา",
              "พะเยา" => "พะเยา",
              "พังงา" => "พังงา",
              "พัทลุง" => "พัทลุง",
              "พิจิตร" => "พิจิตร",
              "พิษณุโลก" => "พิษณุโลก",
              "ภูเก็ต" => "ภูเก็ต",
              "มหาสารคาม" => "มหาสารคาม",
              "มุกดาหาร" => "มุกดาหาร",
              "ยะลา" => "ยะลา",
              "ยโสธร" => "ยโสธร",
              "ระนอง" => "ระนอง",
              "ระยอง" => "ระยอง",
              "ราชบุรี" => "ราชบุรี",
              "ร้อยเอ็ด" => "ร้อยเอ็ด",
              "ลพบุรี" => "ลพบุรี",
              "ลำปาง" => "ลำปาง",
              "ลำพูน" => "ลำพูน",
              "ศรีสะเกษ" => "ศรีสะเกษ",
              "สกลนคร" => "สกลนคร",
              "สงขลา" => "สงขลา",
              "สตูล" => "สตูล",
              "สมุทรปราการ" => "สมุทรปราการ",
              "สมุทรสงคราม" => "สมุทรสงคราม",
              "สมุทรสาคร" => "สมุทรสาคร",
              "สระบุรี" => "สระบุรี",
              "สระแก้ว" => "สระแก้ว",
              "สิงห์บุรี" => "สิงห์บุรี",
              "สุพรรณบุรี" => "สุพรรณบุรี",
              "สุราษฎร์ธานี" => "สุราษฎร์ธานี",
              "สุรินทร์" => "สุรินทร์",
              "สุโขทัย" => "สุโขทัย",
              "หนองคาย" => "หนองคาย",
              "หนองบัวลำภู" => "หนองบัวลำภู",
              "อำนาจเจริญ" => "อำนาจเจริญ",
              "อุดรธานี" => "อุดรธานี",
              "อุตรดิตถ์" => "อุตรดิตถ์",
              "อุทัยธานี" => "อุทัยธานี",
              "อุบลราชธานี" => "อุบลราชธานี",
              "อ่างทอง" => "อ่างทอง",
              "เชียงราย" => "เชียงราย",
              "เชียงใหม่" => "เชียงใหม่",
              "เพชรบุรี" => "เพชรบุรี",
              "เพชรบูรณ์" => "เพชรบูรณ์",
              "เลย" => "เลย",
              "แพร่" => "แพร่",
              "แม่ฮ่องสอน" => "แม่ฮ่องสอน",
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">
 <!-- Fax Field -->
<div class="form-group col">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div> 
</div>



<div class="row">
  <!-- Website Field -->
<div class="form-group col">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Fullname Contact Field -->
<div class="form-group col">
    {!! Form::label('fullname_contact', 'Fullname Contact:') !!}
    {!! Form::text('fullname_contact', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">
  <!-- Position Context Field -->
  <div class="form-group col">
      {!! Form::label('position_contact', 'Position Contact:') !!}
      {!! Form::text('position_contact', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Submit Field -->
  <div class="form-group col" style="margin-top: 30px;">
      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
      <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
  </div>

</div>

