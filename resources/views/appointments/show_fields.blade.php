<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $appointment->id !!}</p>
</div>

<!-- Datetime Field -->
<div class="form-group">
    {!! Form::label('datetime', 'Datetime:') !!}
    <p>{!! $appointment->datetime !!}</p>
</div>

<!-- Des Field -->
<div class="form-group">
    {!! Form::label('des', 'Des:') !!}
    <p>{!! $appointment->des !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $appointment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $appointment->updated_at !!}</p>
</div>

