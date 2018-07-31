<li class="{{ Request::is('memberProfiles*') ? 'active' : '' }}">
    <a href="{!! route('memberProfiles.index') !!}"><i class="fa fa-edit"></i><span>Member Profiles</span></a>
</li>

<li class="{{ Request::is('jobPositions*') ? 'active' : '' }}">
    <a href="{!! route('jobPositions.index') !!}"><i class="fa fa-edit"></i><span>Job Positions</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('announcements*') ? 'active' : '' }}">
    <a href="{!! route('announcements.index') !!}"><i class="fa fa-edit"></i><span>Announcements</span></a>
</li>

<li class="{{ Request::is('governmentJobs*') ? 'active' : '' }}">
    <a href="{!! route('governmentJobs.index') !!}"><i class="fa fa-edit"></i><span>Government Jobs</span></a>
</li>

