<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.css">
    @stack('style')
  </head>
  <body>
    <div>
        <ul class="nav nav-pills">
          <li class="home {{$nav_home}}" ><a href="home">Home</a></li>
          <li class="profile {{$nav_profile}}"><a href="profile">Profile</a></li>
          <li class="disable"><a href="#">Disabled</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
              Dropdown <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
    </div>
    <header class="jumbotron">
      @yield('header')
    </header>
    <div class="container">
        @yield('content')
    </div>



    <script src="/js/app.js" charset="utf-8">
    </script>

    @stack('script')
  </body>
</html>
