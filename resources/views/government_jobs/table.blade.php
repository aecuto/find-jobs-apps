<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($governmentJobs as $governmentJobs)
        <tr>
            <td>{!! $governmentJobs->name !!}</td>
            <td>{!! $governmentJobs->details !!}</td>
            <td>
              <div class="row">
                <a href="{!! route('governmentJobs.show', [$governmentJobs->id]) !!}" class='btn btn-primary btn-xs' role="button">
                  Show
                </a>
                @auth
                @if(Auth::user()->hasRole(['admin']))
                  <a href="{!! route('governmentJobs.edit', [$governmentJobs->id]) !!}" class='btn btn-warning btn-xs'>
                    Edit
                  </a>
                  {!! Form::open(['route' => ['governmentJobs.destroy', $governmentJobs->id], 'method' => 'delete']) !!}
                      {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  {!! Form::close() !!}
                  <a href="{!! route('governmentJobs.confirm', [$governmentJobs->id]) !!}" class='btn btn-info btn-xs {{ $governmentJobs->status==0 ?: 'disabled' }}'>
                    {{ $governmentJobs->status==0 ? 'Confirm': 'Confirmed' }}
                  </a>
                  @endif
                @endauth
              </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>