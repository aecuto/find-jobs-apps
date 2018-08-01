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
                <a href="/manager"  class="remove-underline">
                  <div class="features-icons-icon d-flex">
                      <i class="icon-share m-auto text-primary"></i>
                  </div>
                </a>
                <h3>ประกาศงานว่าง</h3>
                <p class="lead mb-0">บริษัทสมาชิก สามารถ ประกาศตำแหน่งงานได้ ฟรี</p>
              </div>
            </div>
            <div class="col">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <a href="/login"  class="remove-underline">
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

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Fully Responsive Design</h2>
            <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Updated For Bootstrap 4</h2>
            <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Easy to Use &amp; Customize</h2>
            <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="http://www.dpadda.com/wp-content/uploads/2018/03/IMG_4218.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
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