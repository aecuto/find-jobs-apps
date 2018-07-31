<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>Name</th>
        <th>Details</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($governmentJobs as $governmentJobs)
        <tr>
            <td>{!! $governmentJobs->name !!}</td>
            <td>{!! $governmentJobs->details !!}</td>
            <td>
                {!! Form::open(['route' => ['governmentJobs.destroy', $governmentJobs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('governmentJobs.show', [$governmentJobs->id]) !!}" class='btn btn-primary btn-xs'>
                      Show
                    </a>
                    <a href="{!! route('governmentJobs.edit', [$governmentJobs->id]) !!}" class='btn btn-warning btn-xs'>
                      Delete
                    </a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>