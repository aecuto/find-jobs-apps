@extends('layouts.admin_app')

@section('admin_content')
<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($managers as $manager)
        <tr>
            <td>{!! $manager->name !!}</td>
            <td>{!! $manager->email !!}</td>
            <td>
              <div class="row">
                @auth
                @if(Auth::user()->hasRole(['admin']))
                {!! Form::open(['route' => ['manager.destroy', $manager->id], 'method' => 'delete']) !!}
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
                @endif
                @endauth
              </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
