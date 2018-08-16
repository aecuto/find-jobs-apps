

<div class="form-group col-sm-12 col-lg-12">
  {!! Form::label('date', 'วันที่:') !!}
  {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
  {!! Form::label('time', 'เวลา:') !!}
  {!! Form::time('time', null, ['class' => 'form-control']) !!}
</div>

<!-- Des Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('des', 'คำอธิบาย:') !!}
    {!! Form::textarea('des', null, ['class' => 'form-control']) !!}
</div>

{!! Form::hidden('user_id', null, ['id' => 'user_id']) !!}
{!! Form::hidden('job_position_id', null, ['id' => 'job_position_id']) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('appointments.index') !!}" class="btn btn-default">ยกเลิก</a>
</div>

<script>
  function getParameterByName( name ){
    var regexS = "[\\?&]"+name+"=([^&#]*)", 
    regex = new RegExp( regexS ),
    results = regex.exec( window.location.search );
    if( results == null ){
      return "";
    } else{
      return decodeURIComponent(results[1].replace(/\+/g, " "));
    }
  }

  $("input#user_id").attr('value', getParameterByName('member_id'));
  $("input#job_position_id").attr('value', getParameterByName('job_position_id'));
</script>