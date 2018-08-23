<!-- Name Field -->
<div class="form-group  col-sm">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Show Name Field -->
<div class="form-group  col-sm">
    {!! Form::label('show_name', 'Show Title:') !!}
    <label class="radio-inline">
        {!! Form::radio('show_name', true, null) !!} Show
    </label>

    <label class="radio-inline">
        {!! Form::radio('show_name', false, null) !!} Hide
    </label>

</div>

<!-- Details Field -->
<div class="form-group col-sm">
    {!! Form::label('image_address', 'Image URL:') !!}
    {!! Form::textarea('image_address', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('advertisings.index') !!}" class="btn btn-default">Cancel</a>
</div>
