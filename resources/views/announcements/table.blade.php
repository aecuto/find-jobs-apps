<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
          <th>หัวข้อ</th>
          <th>คำอธิบาย</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($announcements as $announcements)
        <tr>
            <td>{!! $announcements->title !!}</td>
            <td>{!! $announcements->description !!}</td>
            <td>
              <a href="{!! route('announcements.show', [$announcements->id]) !!}" class='btn btn-info'>
                <i class="fas fa-eye"></i>
              </a>
              @auth
                @if(Auth::user()->hasRole(['admin']))

                {!! Form::open(['route' => ['announcements.destroy', $announcements->id], 'method' => 'delete','style'=>"display: unset;"]) !!}
                  <a href="{!! route('announcements.edit', [$announcements->id]) !!}" class='btn btn-warning btn-xs'>
                      <i class="far fa-edit"></i>
                  </a>
                  {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                  <a href="{!! route('announcements.confirm', [$announcements->id]) !!}" class='btn btn-info btn-xs {{ $announcements->status==0 ?: 'disabled' }}'>
                      {!! $announcements->status==0 ? '<i class="far fa-check-circle"></i>': '<i class="fas fa-check-circle"></i>' !!}
                  </a>
                {!! Form::close() !!}
                @endif
              @endauth
            </td>
        </tr>
    @endforeach
    </tbody>
</table>