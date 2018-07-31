<table class="table table-responsive" id="jobPositions-table">
    <thead>
        <tr>
        <th>Jobname</th>
        <th>Companyname</th>
        <th>Job</th>
        <th>Salary</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobPositions as $jobPosition)
        <tr>
            <td>{!! $jobPosition->jobname !!}</td>
            <td>{!! $jobPosition->companyname !!}</td>
            <td>{!! $jobPosition->job !!}</td>
            <td>{!! $jobPosition->salary !!}</td>
            <td>
                {!! Form::open(['route' => ['jobPositions.destroy', $jobPosition->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobPositions.show', [$jobPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobPositions.edit', [$jobPosition->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>