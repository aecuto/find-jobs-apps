<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'หัวข้อ:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'คำอธิบาย:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::hidden('status', 0) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('announcements.index') !!}" class="btn btn-default">ยกเลิก</a>
</div>
