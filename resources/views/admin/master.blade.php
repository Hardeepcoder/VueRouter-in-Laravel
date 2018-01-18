<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <link href="{{Config::get('app.url')}}/public/css/app.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>

  .navbar{
    border-radius:0px
  }
  .navbar-inverse{
    background-color:#FF0900;
  }
  .navbar-inverse .navbar-nav>li>a, .navbar-inverse .navbar-text{
    color:#fff
  }

  .navbar-brand{ color:#fff !important; font-weight:bold;}
  .jumbotron{ border:2px solid #ff0900; padding:10px 10px 20px 40px !important}
  .jumbotron h1{color:#ff0900}
  @media (min-width: 1200px){
    .har_row div{width:32%;
      margin:7px; border-radius:5px; padding:0px}
    }

    .router-link-active {
      background-color:#000 !important;
      color: #fff !important;
    }

  </style>
</head>
<body>
  <!-- Navigation -->
<div id="app">
  <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/admin')}}">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php /*<ul class="nav navbar-nav">

          <li><router-link :to="{ name: 'laravel' }" exact >laravel</router-link></li>
          <li><router-link :to="{ name: 'reactNative' }">React Native</router-link></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      */?>
    </div>
  </div>
</nav>
    @yield('content')
    <footer class="footer">
        <div class="container">
          <span class="text-muted">Place sticky footer content here.</span>
        </div>
      </footer>


    </div>
    <script src="{{url('/')}}/public/js/app.js"></script>
</body>
</html>
