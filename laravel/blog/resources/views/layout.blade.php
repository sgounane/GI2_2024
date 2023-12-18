<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>@yield('titre')</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mon Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{route('home')}}>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route("articleForm")}}>Add Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Subscribe</a>
              </li>

            </ul>
          </div>
        </div>
        @auth
          <div class="nav-item mx-1">
            {{ auth()->user()->name}}
          </div>
          <div class="nav-item mx-5">
            <a class="nav-link" href={{route("logout")}}>Logout</a>
          </div>
       @endauth
       @guest

          <div class="nav-item mx-5">
            <a class="nav-link" href={{route("login")}}>Login</a>
          </div>
       @endguest
      </nav>

    <div class='container'>
      @if(session("success"))
      <div class="alert alert-success">
          {{session("success")}}
      </div>
      @endif

      @if(session("error"))
      <div class="alert alert-danger">
          {{session("error")}}
      </div>
      @endif



        <div class="row">
            
                @yield('content')
                
                @yield('aside')
                
            
        </div>
    </div>

</body>
</html>