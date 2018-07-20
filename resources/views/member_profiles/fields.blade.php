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
    {!! Form::select('interested_job', ['aaaa' => 'aaaa', 'bbbb' => 'bbbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Type Interested Job Field -->
<div class="form-group ">
    {!! Form::label('type_interested_job', 'Type Interested Job:') !!}
    {!! Form::select('type_interested_job', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Money Need Field -->
<div class="form-group ">
    {!! Form::label('money_need', 'Money Need:') !!}
    {!! Form::select('money_need', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
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
