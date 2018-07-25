<table class="table table-responsive" id="memberProfiles-table">
    <thead>
        <tr>
            <th>Fullname</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Nationality</th>
        <th>Religion</th>
        <th>Birthdate</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Military Status</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Interested Job</th>
        <th>Type Interested Job</th>
        <th>Money Need</th>
        <th>Work Time</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($memberProfiles as $memberProfile)
        <tr>
            <td>{!! $memberProfile->fullname !!}</td>
            <td>{!! $memberProfile->gender !!}</td>
            <td>{!! $memberProfile->status !!}</td>
            <td>{!! $memberProfile->nationality !!}</td>
            <td>{!! $memberProfile->religion !!}</td>
            <td>{!! $memberProfile->birthdate !!}</td>
            <td>{!! $memberProfile->height !!}</td>
            <td>{!! $memberProfile->weight !!}</td>
            <td>{!! $memberProfile->military_status !!}</td>
            <td>{!! $memberProfile->address !!}</td>
            <td>{!! $memberProfile->phone !!}</td>
            <td>{!! $memberProfile->interested_job !!}</td>
            <td>{!! $memberProfile->type_interested_job !!}</td>
            <td>{!! $memberProfile->money_need !!}</td>
            <td>{!! $memberProfile->work_time !!}</td>
            <td>
                {!! Form::open(['route' => ['memberProfiles.destroy', $memberProfile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('memberProfiles.show', [$memberProfile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('memberProfiles.edit', [$memberProfile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>