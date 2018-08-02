@extends('layouts.app')

@section('title')
<title>Home</title>
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
@endsection

@section('navbar')
<div class="container">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <a class="p-2 text-dark" href="/">JOB TH</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">

    @if (Route::has('login'))
        @auth
            @if(Auth::user()->authorizeRoles(['admin']))
              <a class="p-2 text-dark" href="{{ route('admin.home') }}">Admin Management</a>
            @endif

            @if(Auth::user()->authorizeRoles(['manager']))
              <a class="p-2 text-dark" href="{{ route('manager.home') }}">Job Management</a>
            @endif

            @if(Auth::user()->authorizeRoles(['member']))
              <a class="p-2 text-dark" href="{{ route('member.home') }}">Member Profile</a>
            @endif

            <a class="btn btn-outline-primary" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        @else
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-outline-secondary" href="{{ route('register') }}">Register</a>
        @endauth
    @endif
  </nav>

</div>
</div>
@endsection

@section('content')
    @if(isset($message))
      <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">ข้อความ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>{{ $message }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <script>
          $('#myModal').modal('show');
      </script>
    @endif
    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">ค้นหาตำแหน่งงานที่ต้องการ!</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="get" action="/search_job">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" name="jobname" class="form-control form-control-lg" placeholder="*เช่น บัญชี,การขาย,เลขานุการ">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">
                    <i class="icon-magnifier m-auto"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a href="/search_job"  class="remove-underline">
                <div class="features-icons-icon d-flex">
                    <i class="icon-magnifier m-auto text-primary"></i>
                </div>
              </a>
              <h3>ค้นหา ตำแหน่งงาน</h3>
              <p class="lead mb-0">ตำแหน่งงานว่าง ใหม่ๆ อัปเดท ทุกๆ วัน</p>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <a href="/search_worker"  class="remove-underline">
                <div class="features-icons-icon d-flex">
                    <i class="icon-people m-auto text-primary"></i>
                </div>
              </a>
              <h3>ค้นหา คนทำงาน</h3>
              <p class="lead mb-0">บริษัทสมาชิก สามารถ ค้นหาและดูใบสมัครงานได้</p>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <a href="/forum"  class="remove-underline">
                <div class="features-icons-icon d-flex">
                    <i class="icon-info m-auto text-primary"></i>
                </div>
              </a>
              <h3>เว็บบอร์ด</h3>
              <p class="lead mb-0">สามารถ ตั้งกระทู้ ตอบกระทู้ ในเว็บบอร์ดได้</p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                  <a href="/register"  class="remove-underline">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                  </a>
                  <h3>สมัครสมาชิก</h3>
                  <p class="lead mb-0">สมาชิกเพื่อให้คุณ สามารถใช้งาน เมนูต่างๆ ได้</p>
                </div>
            </div>
            <div class="col">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <a href="/manager_register"  class="remove-underline">
                  <div class="features-icons-icon d-flex">
                      <i class="fas fa-bullhorn m-auto text-primary"></i>
                  </div>
                </a>
                <h3>ประกาศงานว่าง</h3>
                <p class="lead mb-0">บริษัทสมาชิก สามารถ ประกาศตำแหน่งงานได้ ฟรี</p>
              </div>
            </div>
            <div class="col">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <a href="/worker_register"  class="remove-underline">
                  <div class="features-icons-icon d-flex">
                      <i class="icon-note m-auto text-primary"></i>
                  </div>
                </a>
                <h3>เขียนใบสมัครงาน</h3>
                <p class="lead mb-0">ลงข้อมูลของคุณไว้กับเรา เพื่อใช้ในการสมัครงาน</p>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">

        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-1 showcase-text">
            <h1>บริษัทล่าสุด</h1>
            <div class="card">
              <div class="card-body">
                @foreach($recent_company as $company)
                  <p>{{ $company->companyname }}</p>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 showcase-text">
            <h1>งานล่าสุด</h1>
            <div class="card bg-light">
                <div class="card-body">
                  @foreach($recent_job as $job)
                    <p>{{ $job->jobname}}</p>
                  @endforeach
                  <p>
                    <a href="/search_job" class="btn btn-primary btn-block btn-lg active" role="button" aria-pressed="true">More...</a>
                  </p>
                </div>
            </div>
          </div>

        </div>
    
      </div>
    </section>

    <!-- Testimonials -->
    <section class="showcase text-center bg-light">
      <div class="container-fluid p-0">
          <div class="row no-gutters">

              <div class="col-lg-6 order-lg-1 showcase-text">
                <h1>งานราชการ รัฐวิสาหกิจ</h1>
                <div class="card">
                  <div class="card-body">
                    @foreach($recent_government_jobs as $gov_job)
                      <p>{{$gov_job->name}}</p>
                    @endforeach
                    <p>
                      <a href="/governmentJobs/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่ม</a>
                      <a href="/governmentJobs" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ดูทั้งหมด</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 order-lg-1 showcase-text">
                <h1>ข่าวประกาศ</h1>
                <div class="card bg-light">
                    <div class="card-body">
                      @foreach($recent_job as $job)
                      @endforeach
                      <p>
                        <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพิ่ม</a>
                        <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ดูทั้งหมด</a>
                      </p>
                    </div>
                </div>
              </div>
    
            </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="mb-4">Ready to get started? Sign up now!</h2>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <a type="submit" role="button" class="btn btn-lg btn-primary" href="/register">Sign up!</a>
            </div>
          </div>
      </div>
    </section>

    @include('layouts.footer')

@endsection