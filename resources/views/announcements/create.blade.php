@extends('layouts.admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Announcements
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'announcements.store']) !!}

                        @include('announcements.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
