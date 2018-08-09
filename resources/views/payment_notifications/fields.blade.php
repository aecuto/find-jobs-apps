<div class="row">
  <!-- Service Type Field -->
  <div class="form-group col">
    {!! Form::label('service_type', 'Service Type:') !!}
    {!! Form::select('service_type', [
      '' => 'โปรดเลือก', 
      'ชำระค่าบริษัทสมาชิก' => 'ชำระค่าบริษัทสมาชิก',
      'ชำระค่าโฆษณา' => 'ชำระค่าโฆษณา']
      , null, ['class' => 'form-control']) !!}
  </div>

  <!-- Companyname Field -->
  <div class="form-group col">
    {!! Form::label('companyname', 'Companyname:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
  </div>
</div>



<div class="row">
  <!-- Email Field -->
  <div class="form-group col">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Phone Field -->
  <div class="form-group col">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
  </div>
</div>



<div class="row">
  <!-- Bankname Field -->
  <div class="form-group col">
    {!! Form::label('bankname', 'Bankname:') !!}
    {!! Form::text('bankname', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Money Field -->
  <div class="form-group col">
    {!! Form::label('money', 'Money:') !!}
    {!! Form::number('money', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row">
  <!-- Details Field -->
  <div class="form-group col">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control', 'rows' => '3']) !!}
  </div>

  <!-- Submit Field -->
  <div class="form-group col" style="margin: auto;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  </div>

</div>


