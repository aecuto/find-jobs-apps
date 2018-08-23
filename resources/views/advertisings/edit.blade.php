@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="content-header">
        <h1>
            Advertising
        </h1>
   </section>
  @include('adminlte-templates::common.errors')
  <div class="row">
      {!! Form::model($advertising, ['route' => ['advertisings.update', $advertising->id], 'method' => 'patch']) !!}

          @include('advertisings.fields')

      {!! Form::close() !!}
  </div>
@endsection