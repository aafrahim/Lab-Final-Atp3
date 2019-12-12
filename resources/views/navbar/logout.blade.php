<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
  </head>
  <body class="container" style="min-height: 900px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Online Car Rent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('login.index')}}">Login<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('registration.index')}}">Registration<span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </nav>

    <br><br>

    @yield('content')

  </body>
</html>