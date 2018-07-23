<!-- Companyname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companyname', 'Companyname:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
</div>

<!-- Companytype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companytype', 'Companytype:') !!}
    {!! Form::select('companytype', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_year', 'Start Year:') !!}
    {!! Form::select('start_year', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Worker Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('worker_count', 'Worker Count:') !!}
    {!! Form::select('worker_count', ['aaa' => 'aaa', 'bbb' => 'bbb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', ['aa' => 'aa', 'bb' => 'bb'], null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Fullname Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname_contact', 'Fullname Contact:') !!}
    {!! Form::text('fullname_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Context Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position_context', 'Position Context:') !!}
    {!! Form::text('position_context', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
</div>
