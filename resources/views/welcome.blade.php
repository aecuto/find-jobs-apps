<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        {{ Html::style('css/home.css') }}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        @if(Auth::user()->authorizeRoles(['admin']))
                          <a href="{{ route('admin.home') }}">Admin Management</a>
                        @endif

                        @if(Auth::user()->authorizeRoles(['manager']))
                          <a href="{{ route('manager.home') }}">Job Management</a>
                        @endif

                        @if(Auth::user()->authorizeRoles(['member']))
                          <a href="{{ route('member.home') }}">Member Profile</a>
                        @endif

                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Home Page
                </div>
            </div>
        </div>
    </body>
</html>
