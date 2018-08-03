<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($announcements as $announcements)
        <tr>
            <td>{!! $announcements->title !!}</td>
            <td>{!! $announcements->description !!}</td>
            <td>
              <div class='row'>
                <a href="{!! route('announcements.show', [$announcements->id]) !!}" class='btn btn-info btn-xs'>
                    Show
                </a>
                @auth
                  @if(Auth::user()->hasRole(['admin']))
                  {!! Form::open(['route' => ['announcements.destroy', $announcements->id], 'method' => 'delete']) !!}
                      <a href="{!! route('announcements.edit', [$announcements->id]) !!}" class='btn btn-warning btn-xs'>
                        Edit
                      </a>
                      {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  
                  {!! Form::close() !!}
                  <a href="{!! route('announcements.confirm', [$announcements->id]) !!}" class='btn btn-info btn-xs {{ $announcements->status==0 ?: 'disabled' }}'>
                      {{ $announcements->status==0 ? 'Confirm': 'Confirmed' }}
                  </a>
                  @endauth
                @endif
              </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>