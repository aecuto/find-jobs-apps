<nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-bottom: 15px">
  <a class="navbar-brand" href="#">JOBs SCODE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      @auth
        @if(Auth::user()->authorizeRoles(['member']))
          <li class="nav-item">
              <a class="nav-link" href="/member">Member Profile</a>
          </li>
        @endif
        @if(Auth::user()->authorizeRoles(['manager']))
          <li class="nav-item">
            <a class="nav-link" href="{!! route('appointments.index') !!}">นัดหมาย</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/manager">ตำแหน่งงานที่เพิ่มแล้ว</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('jobPositions.create') !!}">เพิ่มตำแหน่งงานว่าง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('companies.show_resume') !!}">ใบสมัครงานที่เก็บไว้</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('companies.index') !!}">ข้อมูลบริษัท</a>
          </li>
        @endif
      @endauth
    </ul>
    @auth
      <a class="btn btn-outline-light" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    @else
      <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
      <a class="btn btn-outline-light" href="{{ route('register') }}">Register</a>
    @endauth
  </div>
</nav>