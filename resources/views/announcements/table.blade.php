<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Start Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($announcements as $announcements)
        <tr>
            <td>{!! $announcements->title !!}</td>
            <td>{!! $announcements->description !!}</td>
            <td>{!! $announcements->start_date !!}</td>
            <td>
                {!! Form::open(['route' => ['announcements.destroy', $announcements->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('announcements.show', [$announcements->id]) !!}" class='btn btn-info btn-xs'>
                      Show
                    </a>
                    <a href="{!! route('announcements.edit', [$announcements->id]) !!}" class='btn btn-warning btn-xs'>
                      Edit
                    </a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>