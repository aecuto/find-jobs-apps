<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
        <th>Fullname</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Interested Job</th>
        <th>Type Interested Job</th>
        <th>Money Need</th>
        <th>Work Time</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($memberProfiles as $memberProfile)
        <tr>
            <td>{!! $memberProfile->fullname !!}</td>
            <td>{!! $memberProfile->gender !!}</td>
            <td>{!! $memberProfile->address !!}</td>
            <td>{!! $memberProfile->phone !!}</td>
            <td>{!! $memberProfile->interested_job !!}</td>
            <td>{!! $memberProfile->type_interested_job !!}</td>
            <td>{!! $memberProfile->money_need !!}</td>
            <td>{!! $memberProfile->work_time !!}</td>
            <td>
                {!! Form::open(['route' => ['memberProfiles.destroy', $memberProfile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>