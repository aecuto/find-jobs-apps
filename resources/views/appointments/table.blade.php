<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>date</th>
            <th>time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
        <tr>
            <td>{!! $appointment->date !!}</td>
            <td>{!! $appointment->time !!}</td>
            <td>
                {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('appointments.show', [$appointment->id]) !!}" class='btn btn-default btn-xs'>show</a>
                    <a href="{!! route('appointments.edit', [$appointment->id]) !!}" class='btn btn-default btn-xs'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>