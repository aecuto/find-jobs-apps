<table 
  data-toggle="table"
  data-pagination="true"
  data-page-size="10"
>
    <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packages as $package)
        <tr>
            <td>{!! $package->name !!}</td>
            <td>{!! $package->description !!}</td>
            <td>
                {!! Form::open(['route' => ['packages.destroy', $package->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packages.show', [$package->id]) !!}" class='btn btn-primary btn-xs'>
                      Show</a>
                    <a href="{!! route('packages.edit', [$package->id]) !!}" class='btn btn-warning btn-xs'>
                      Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>