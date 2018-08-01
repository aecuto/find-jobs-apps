
<div class="form-group col">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('name'))
      <div class="text-danger">
        {{ $errors->first('name') }}
      </div>
    @endif
</div>


<div class="form-group col ">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('email'))
      <div class="text-danger">
        {{ $errors->first('email') }}
      </div>
    @endif
</div>

<div class="form-group col ">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
    @if ($errors->has('password'))
      <div class="text-danger">
        {{ $errors->first('password') }}
      </div>
    @endif
</div>


<div class="form-group col ">
    {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col ">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="/register" class="btn btn-default">Cancel</a>
</div>
