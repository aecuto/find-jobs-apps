<div class="card">
    <div class="card-header">
      {!! $announcements->title !!}
    </div>
    <div class="card-body">
      <p class="card-text">{!! $announcements->description !!}</p>
    </div>
    <div class="card-footer text-muted">
      {!! $announcements->created_at !!}
    </div>
</div>

