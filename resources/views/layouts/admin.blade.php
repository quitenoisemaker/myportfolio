

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
    <a href="/admin" class="navbar-brand">Admin</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">

      @if (Auth::check())

@if (Auth::user()->isAdmin())
      <ul class="navbar-nav">
       <!--  <li class="nav-item px-2">
          <a href="/admin" class="nav-link ">Dashboard</a>
        </li> -->
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
            <a href="{{route('posts.index')}}" class="dropdown-item">
              All posts
            </a>
            <a href="{{route('posts.create')}}" class="dropdown-item">
              Create post
            </a>
            <a href="{{route('comments.index')}}" class="dropdown-item">
              All comment
            </a>
          
          </div>
        </li>
        <li class="nav-item mr-3">
          <a href="{{route('categories.index')}}" class="nav-link" data-toggle="">
            Categories
          </a>
          <!-- <div class="dropdown-menu">
            <a href="{{route('categories.index')}}" class="dropdown-item">
              All categories
            </a>
            
          </div> -->
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

      @else

      <ul class="navbar-nav">
       <!--  <li class="nav-item px-2">
          <a href="/admin" class="nav-link ">Dashboard</a>
        </li> -->
      
        <li class="nav-item mr-3">
          <a href="#" class="nav-link" data-toggle="">
            About
          </a>
          <!-- <div class="dropdown-menu">
            <a href="{{route('categories.index')}}" class="dropdown-item">
              All categories
            </a>
            
          </div> -->
        </li>
         
      </ul>


      @endif

@endif

      <ul class="navbar-nav ml-auto">
         
        @if (Auth::check())
        <li class="nav-item dropdown mr-3">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user fa-fw"></i>

                                    
                                    {{ Auth::user()->name }} <span class=""></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    

                                    
                                </div>
          <div class="dropdown-menu">
           
            <a href="settings.php" class="dropdown-item">
              <i class="fa fa-gear"></i>logout
            </a>
          
          </div>
          @else

          <li class="nav-item dropdown mr-3">
          <a href="/login" class="nav-link ">
            Login
          </a>
        </li>
        </li>
      @endif
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
