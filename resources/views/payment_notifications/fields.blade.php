<div class="row">
  <!-- Service Type Field -->
  <div class="form-group col">
    {!! Form::label('service_type', 'ประเภทบริการ:') !!}
    {!! Form::select('service_type', [
      '' => 'โปรดเลือก', 
      'ชำระค่าบริษัทสมาชิก' => 'ชำระค่าบริษัทสมาชิก',
      'ชำระค่าโฆษณา' => 'ชำระค่าโฆษณา']
      , null, ['class' => 'form-control']) !!}
  </div>

  <!-- Companyname Field -->
  <div class="form-group col">
    {!! Form::label('companyname', 'ชื่อบริษัท:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
  </div>
</div>



<div class="row">
  <!-- Email Field -->
  <div class="form-group col">
    {!! Form::label('email', 'อีเมล์:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Phone Field -->
  <div class="form-group col">
    {!! Form::label('phone', 'มือถือ:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
  </div>
</div>



<div class="row">
  <!-- Bankname Field -->
  <div class="form-group col">
    {!! Form::label('bankname', 'ธนาคารที่ชำระเงิน:') !!}
    {!! Form::text('bankname', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Money Field -->
  <div class="form-group col">
    {!! Form::label('money', 'จำนวนเงิน:') !!}
    {!! Form::number('money', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row">
  <!-- Details Field -->
  <div class="form-group col">
    {!! Form::label('details', 'รายละเอียดเพิ่มเติม:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control', 'rows' => '3']) !!}
  </div>

  <!-- Submit Field -->
  <div class="form-group col" style="margin: auto;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  </div>

</div>


