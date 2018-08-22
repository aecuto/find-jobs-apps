
@foreach($advertisings as $advertising)
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm">
          <h5 class="card-title">{!! $advertising->name !!} <span class="badge badge-secondary">{!! $advertising->show_name ? "Show Title" : "Hide Title" !!}</span></h5>
        </div>
        <div class="col-sm text-right">
          @auth
            @if(Auth::user()->authorizeRoles(['admin']))
              <a href="{!! route('advertisings.edit', [$advertising->id]) !!}" class='btn btn-warning btn-xs'>Edit</a>
            @endif
          @endauth
        </div>
      </div>
      
      <hr>
      <pre class="card-text">{!! $advertising->details !!}</pre>
    </div>
  </div>
  <hr>
@endforeach
