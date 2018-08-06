<div class="col-4">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" href="#" >@yield('active_menu')</a>
        <hr>
        <a class="nav-link" href="/search_job" >SEARCH JOBS</a>
        <a class="nav-link" href="/search_worker">SEARCH WORKERS</a>
        <a class="nav-link" href="/governmentJobs">GOVERNMENT JOBS</a>
        <a class="nav-link" href="/announcements">ANNOUNCEMENTS</a>
    </div>
</div>
<li class="{{ Request::is('images*') ? 'active' : '' }}">
    <a href="{!! route('images.index') !!}"><i class="fa fa-edit"></i><span>Images</span></a>
</li>

