

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


  <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid" src="{{$post->photo->file}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$post->body}}</p>

                <hr>

                <!-- Blog Comments -->

                
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    {!! Form::open(['method'=>'post', 'action'=> 'PostCommentsController@store']) !!}

                    <br>

                    @if(Session::has('comment_message'))

                {{session('comment_message')}}


                @endif



                    <input type="hidden" name="post_id" value="{{$post->id}}">
 
                      <div class="form-group">
                      {!! Form::label('body', 'Body:')!!}
                      {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3])!!}

                      </div>

                    <div class="form-group">
                    {!! Form::submit('Submit', ['class'=>'btn btn-primary'])!!}
                     </div>
                    {!! Form::close() !!}
                </div>

                <hr>

                <!-- Posted Comments -->

                @if(count($comments)> 0)

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                @endif

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>


	
</section>

</div>


</body>

</html>
