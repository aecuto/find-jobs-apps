<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>Status</th>
            <th>date</th>
            <th>time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
        <tr>
            <td>
              <a href="#" class="btn btn-info disabled">
                  {{ $appointment->confirmed==true ? "Confirm" : "Wating"  }}
              </a>
            </td>
            <td>{!! $appointment->date !!}</td>
            <td>{!! $appointment->time !!}</td>
            <td>
                {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('appointments.edit', [$appointment->id]) !!}" class='btn btn-warning btn-xs'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>