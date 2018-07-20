@extends('layouts.member_app')

@section('content')
    <section class="content-header">
        <h1>
            Member Profile
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('member_profiles.show_fields')
                    <a href="{!! route('memberProfiles.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
