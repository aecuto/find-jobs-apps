<li class="{{ Request::is('memberProfiles*') ? 'active' : '' }}">
    <a href="{!! route('memberProfiles.index') !!}"><i class="fa fa-edit"></i><span>Member Profiles</span></a>
</li>

<li class="{{ Request::is('jobPositions*') ? 'active' : '' }}">
    <a href="{!! route('jobPositions.index') !!}"><i class="fa fa-edit"></i><span>Job Positions</span></a>
</li>

