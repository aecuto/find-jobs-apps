@extends('layouts.admin_app')

@section('admin_content')
<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>ชื่อ-สกุล</th>
            <th>อีเมลล์</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($managers as $manager)
        <tr>
            <td>{!! $manager->name !!}</td>
            <td>{!! $manager->email !!}</td>
            <td>
                @auth
                @if(Auth::user()->hasRole(['admin']))
                {!! Form::open(['route' => ['manager.destroy', $manager->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
                @endif
                @endauth

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
