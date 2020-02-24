

<!DOCTYPE html>
<html lang="en">

<head>

    <title>My Admin</title>
   <html lang="eng">
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width" initial-scale="1">
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">


</head>

<body id="" >

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0" >
  <div class="container" style="margin: 10px">
    <a href="index.php" class="navbar-brand">Admin</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item px-2">
          <a href="#" class="nav-link ">Dashboard</a>
        </li>
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            User
          </a>
          <div class="dropdown-menu">
            <a href="{{route('users.index')}}" class="dropdown-item">
              All user
            </a>
            <a href="{{route('users.create')}}" class="dropdown-item">
              Create User
            </a>
          
          </div>
        </li>
       <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            Posts
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">
              All posts
            </a>
            <a href="#" class="dropdown-item">
              Create post
            </a>
            <a href="#" class="dropdown-item">
              All comment
            </a>
          
          </div>
        </li>
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            Categories
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">
              All categories
            </a>
            <a href="#" class="dropdown-item">
              Create category
            </a>
            
          </div>
        </li>
          <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            Media
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">
              All media
            </a>
            <a href="#" class="dropdown-item">
              Upload media
            </a>
            
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
         <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link ">
            Home
          </a>
        </li>
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class ="fa fa-user"></i> Welcome Admin
          </a>
          <div class="dropdown-menu">
           
            <a href="settings.php" class="dropdown-item">
              <i class="fa fa-gear"></i>logout
            </a>
          
          </div>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<section class="m-3">


	@yield('content')
</section>

</div>


</body>

</html>
