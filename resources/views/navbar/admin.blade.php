<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
  </head>
  <body class="container" style="min-height: 900px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{route('home.index')}}">Online Car Rent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.userlist')}}">User List<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('car.add')}}">Add Car<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('car.carlist')}}">Car List<span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="#">Profile<span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('logout.index')}}">Logout<span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </nav>

    <br><br>

    @yield('content')

  </body>
</html>