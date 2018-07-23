<!-- Jobname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jobname', 'Jobname:') !!}
    {!! Form::text('jobname', null, ['class' => 'form-control']) !!}
</div>

<!-- Companyname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companyname', 'Companyname:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job', 'Job:') !!}
    {!! Form::select('job', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Certificate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificate', 'Certificate:') !!}
    {!! Form::select('certificate', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::number('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('experience', 'Experience:') !!}
    {!! Form::select('experience', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Map Field -->
<div class="form-group col-sm-6">
    {!! Form::label('map', 'Map:') !!}
    {!! Form::text('map', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobPositions.index') !!}" class="btn btn-default">Cancel</a>
</div>
