<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>ชื่องาน</th>
            <th>รายละเอียด</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($governmentJobs as $governmentJobs)
        <tr>
            <td>{!! $governmentJobs->name !!}</td>
            <td>{!! $governmentJobs->details !!}</td>
            <td>
              <a href="{!! route('governmentJobs.show', [$governmentJobs->id]) !!}" class='btn btn-primary btn-xs' role="button">
                <i class="fas fa-eye"></i>
              </a>
              @auth
              @if(Auth::user()->hasRole(['admin']))
                
                {!! Form::open(['route' => ['governmentJobs.destroy', $governmentJobs->id], 'method' => 'delete','style'=>"display: unset;"]) !!}
                  <a href="{!! route('governmentJobs.edit', [$governmentJobs->id]) !!}" class='btn btn-warning btn-xs'>
                    <i class="far fa-edit"></i>
                  </a>
                  {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  <a href="{!! route('governmentJobs.confirm', [$governmentJobs->id]) !!}" class='btn btn-info btn-xs {{ $governmentJobs->status==0 ?: 'disabled' }}'>
                    {!! $governmentJobs->status==0 ? '<i class="far fa-check-circle"></i>': '<i class="fas fa-check-circle"></i>' !!}
                  </a>
                {!! Form::close() !!}
               
                @endif
              @endauth
            </td>
        </tr>
    @endforeach
    </tbody>
</table>