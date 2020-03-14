

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
    <a href="/admin" class="navbar-brand">My Blog Post</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <!--  <li class="nav-item px-2">
          <a href="/admin" class="nav-link ">Dashboard</a>
        </li> -->
        
    
       
         
      </ul>

    
    </div>
  </div>
</nav>
<div class="container">
<section class="m-3">

<div class="row">

            <!-- Blog Entries Column -->
            <div class="col">

              @foreach($posts as $post)

                <!-- First Blog Post -->
                <h2>
                    <a href="#">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">{{$post->user->name}}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>
                <hr>
                <a href="{{route('blog.post', $post->slug)}}">
                <img class="img-fluid" src="{{$post->photo->file}}" alt=""></a>
                <hr>
                <p>{{$post->body}}</p>
                <a class="btn btn-primary" href="{{route('blog.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

             @endforeach
               

            </div>

        </div>

        <div class="row float-right">

		<div class="col-sm-6 col-sm-offset-8">

			{{$posts->render()}};
			
		</div>
		
	</div>


	
</section>

</div>


</body>

</html>
