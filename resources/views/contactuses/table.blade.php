<table class="table table-responsive" id="contactuses-table">
    <thead>
        <tr>
            <th>Contact Type</th>
        <th>Contact Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Details</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contactuses as $contactUs)
        <tr>
            <td>{!! $contactUs->contact_type !!}</td>
            <td>{!! $contactUs->contact_name !!}</td>
            <td>{!! $contactUs->email !!}</td>
            <td>{!! $contactUs->phone !!}</td>
            <td>{!! $contactUs->details !!}</td>
            <td>
                {!! Form::open(['route' => ['contactuses.destroy', $contactUs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contactuses.show', [$contactUs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contactuses.edit', [$contactUs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>