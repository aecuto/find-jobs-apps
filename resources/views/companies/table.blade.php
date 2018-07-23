<table class="table table-responsive" id="companies-table">
    <thead>
        <tr>
            <th>Companyname</th>
        <th>Companytype</th>
        <th>Details</th>
        <th>Start Year</th>
        <th>Worker Count</th>
        <th>Address</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Fax</th>
        <th>Email</th>
        <th>Website</th>
        <th>Fullname Contact</th>
        <th>Position Context</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->companyname !!}</td>
            <td>{!! $company->companytype !!}</td>
            <td>{!! $company->details !!}</td>
            <td>{!! $company->start_year !!}</td>
            <td>{!! $company->worker_count !!}</td>
            <td>{!! $company->address !!}</td>
            <td>{!! $company->country !!}</td>
            <td>{!! $company->phone !!}</td>
            <td>{!! $company->fax !!}</td>
            <td>{!! $company->email !!}</td>
            <td>{!! $company->website !!}</td>
            <td>{!! $company->fullname_contact !!}</td>
            <td>{!! $company->position_context !!}</td>
            <td>
                {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('companies.show', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>