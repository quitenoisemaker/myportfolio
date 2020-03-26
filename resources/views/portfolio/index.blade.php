<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
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

    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

  <style type="text/css">


    p,h1,h2,h3,h4{
      font-family: Comic Sans MS;
    }
  

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="prof_pic/samson1.jpg" class="image">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white" style="padding: 4em !important;">
              <div class="name d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Ojugo Samson Ehis</h1></div><br><br>
                <div class="d-flex flex-row">
                <div><a href="www.twitter.com/dequietsammy"><i class="fab fa-twitter" id="fafa"></i></a></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><a href="www.linkedin.com/in/samsonojugo"><i class="fab fa-linkedin" id="fafa"></i></a></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><a href="www.instagram.com/samsonojugo"><i class="fab fa-instagram" id="fafa"></i></a></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><a href="www.github.com/quitenoisemaker"><i class="fab fa-github" id="fafa"></i></a></div>
                
              </div>
            </div>
            <div class="p-4 bg-black" style="font-size: 20px">
              Full Stack Developer
            </div>
            <div>
              <div class="d-flex flex-row text-white align-items-stretch text-center">
                <div class="port-item p-2 bg-dark" data-toggle="collapse" data-target="#home">
                  <i class="fa fa-home d-block" id="fafa"></i>Home
                </div>
                <!-- <div class="port-item p-2 bg-white text-dark" data-toggle="collapse" data-target="#resume">
                  <i class="fa fa-graduation-cap d-block" id="fafa"></i>Resume
                </div> -->
                <div class="port-item p-2 bg-white text-dark" data-toggle="collapse" data-target="#work">
                  <i class="fa fa-folder-open d-block" id="fafa"></i>Work
                </div>
                <div class="port-item p-2 bg-dark text-white" data-toggle="collapse" data-target="#blog">
                  <i class="fa fa-globe d-block" id="fafa"></i>Blog
                </div>
                <div class="port-item p-2 bg-white text-dark"
                data-toggle="collapse" data-target="#contact">
                  <i class="fa fa-envelope d-block" id="fafa"></i>Contact
                </div>
              </div>
            </div>

          </div>
        </div> 
      </div>
      
    </header>
    <div >
    <!-- HOME -->
    <div id="home" class="collapse show">
      <div class="card card-body bg-dark text-white py-5">
        <h2>I’m Sammy,</h2>
        <p class="lead" style="font-family: Comic Sans MS"> a graduate of Computer Science and a Digital Marketer. I’m skilled in HTML, CSS, BOOTSTRAP, Javascript, PHP, WORDPRESS, LARAVEL and VueJs (in view). I also enjoy making CorelDraw Designs, WHITEBOARD ANIMATION, FACEBOOK MARKETING Ads and WEBSITE/BLOG content.
        I have worked on several projects with impressive success rates. I speak and write in English fluently.
    
 </p>
      </div>

      <div class="card card-body py-5">
        <h3><b>Favourite Quote</b></h3>
        <p style="font-size: 20px">"The secret of life, though, is to fall seven times and to get up eight times " </p>
        <i>paulo coalho</i>
        <hr>
        <!-- <h4>HTML</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 88%"></div>
        </div>
        <h4>CSS</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 88%"></div>
        </div>
        <h4>WordPress</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 90%"></div>
        </div>
        <h4>JavaScript(jQuery)</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 60%"></div>
        </div>
        <h4>PHP</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 70%"></div>
        </div>
        <h4>CorelDraw</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 100%"></div>
        </div>
        <h4>Whiteboard Animation using VideoScribe</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-dark" style="width: 70%"></div>
        </div> -->
      </div>
      
    </div>
     
      <!-- BLOG -->
      <div id="blog" class="collapse">
        <div class="card card-body bg-dark text-white py-5">
          <h2>My Blog</h2>
          
        </div>
        <div class="card card-body py-5">
          

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="">

              @foreach($posts as $post)

                <!-- First Blog Post -->
                <h2>
                    <a href="#" style="color: black">{{ucfirst($post->title)}}</a>
                </h2>
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>
                <hr>
                <a href="{{route('blog.post', $post->slug)}}" target="blank">
                <img height="250" width="500" class="img-fluid" src="{{$post->photo ? $post->photo->file : 'no user photo'}}" alt=""></a>
                <hr>
                <p>{!! Str::limit($post->body, 230)!!}</p>
                <a class="btn btn-primary" href="{{route('blog.post', $post->slug)}}" target="blank">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr> <br> <br>

             @endforeach


             <a class="btn btn-outline-primary btn-lg" href="{{route('blog.allpost')}}">View all post</a>

            </div>

        </div>
        </div>
        
      </div>

      <!-- RESUME -->
      <!-- <div id="resume" class="collapse">
        <div class="card card-body bg-dark text-white py-5">
          <h2>My Resume</h2>
          <p class="lead">As a young and motivated individual with strong communication and interpersonal skills, I have been extensively involved in my various organisation.</p>
        </div>
        <div class="card card-body py-5">
          <h3>Where I have worked</h3>
          <p>My involvement in various event has allowed me to work with close peers while supporting the organisation as a whole. This experience have allowed me to develop strong time management and organisational skills</p>
          <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">International Project Management Professionals (IPMP)</h4>
                <p class="card-text">
                  ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore
                </p>
                <p class="p-2 mb-3 bg-dark text-white">Position: Full Stack Developer</p>
                <p class="p-2 mb-3 bg-dark text-white">Phone: +234 70 511 949 40</p>
              </div>
              <div class="card-footer">
                <h6 class="text-muted">Dates: 2015 - 2017</h6>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Gabjom Engineering Ltd</h4>
                <p class="card-text">
                  ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore
                </p>
                <p class="p-2 mb-3 bg-dark text-white">Position: Front End Developer</p>
                <p class="p-2 mb-3 bg-dark text-white">Phone: +234 70 511 949 40</p>
              </div>
              <div class="card-footer">
                <h6 class="text-muted">Dates: 2009 - 2010</h6>
              </div>
            </div>

             <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ohantech</h4>
                <p class="card-text">
                  ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore
                </p>
                <p class="p-2 mb-3 bg-dark text-white">Position: Designer</p>
                <p class="p-2 mb-3 bg-dark text-white">Phone: +234 70 511 949 40</p>
              </div>
              <div class="card-footer">
                <h6 class="text-muted">Dates: 2003 - 2008</h6>
              </div>
            </div>
            
          </div>

        </div>
        
      </div> -->

       <!-- WORK  -->
        <div id="work" class="collapse">
          <div class="card card-body bg-dark text-white py-5">
            <h3>My Portfolio</h3>
            <p class="lead">Here is my portfolio which comprises of some of my works.</p>
          </div>

          <div class="card card-body py-5">
            <h3>My Designs/Works</h3>

            <!-- <p>"The secret of life, though, is to fall seven times and to get up eight times " </p> -->
            
          <div class="row py-3">
            <div class="col-md-3 py-3">
              <a href="port/7.png" data-toggle="lightbox">
              <img src="port/7.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3 py-3"><a href="port/2.jpg" data-toggle="lightbox">
              <img src="port/2.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/3.jpg" data-toggle="lightbox">
              <img src="port/3.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/4.jpg" data-toggle="lightbox">
              <img src="port/4.jpg" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>
          <div class="row py-3">
            <div class="col-md-3 py-3">
              <a href="port/5.jpg" data-toggle="lightbox">
              <img src="port/5.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3 py-3"><a href="port/6.jpg" data-toggle="lightbox">
              <img src="port/6.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/1.jpg" data-toggle="lightbox">
              <img src="port/1.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/8.png" data-toggle="lightbox">
              <img src="port/8.png" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>

          <div class="row py-3">
            <div class="col-md-3 py-3">
              <a href="port/14.jpg" data-toggle="lightbox">
              <img src="port/14.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3 py-3"><a href="port/10.jpg" data-toggle="lightbox">
              <img src="port/10.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/11.jpg" data-toggle="lightbox">
              <img src="port/11.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/17.jpg" data-toggle="lightbox">
              <img src="port/17.jpg" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>
          <div class="row py-3">
            <div class="col-md-3 py-3">
              <a href="port/12.png" data-toggle="lightbox">
              <img src="port/12.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3 py-3"><a href="port/9.png" data-toggle="lightbox">
              <img src="port/9.png" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/15.png" data-toggle="lightbox">
              <img src="port/15.png" alt="" class="img-fluid"></a></div>
            <div class="col-md-3 py-3"><a href="port/13.png" data-toggle="lightbox">
              <img src="port/13.png" alt="" class="img-fluid"></a></div>
            
          </div>

          </div>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="collapse">
           <div class="card card-body bg-dark text-white py-5">
             <h2>Contact</h2>

             <p class="lead">Feel free to contact me and I will be glad to hear from you</p>

             <p class="lead"><b>Whatsapp only:</b><a href="07051194940"> 07051194940</a></p>
             

              <p class="lead"><b>Email: </b><a href="samsonojugo@gmail.com">samsonojugo@gmail.com</a></p>
            
             
           </div>
           <div class="card card-body py-5">
             <h3>Get in touch</h3>
              <p class="">Do you have a project, idea or something to talk about? You can get to contact me from any of the social media platform above or through my contact details.</p>
          

           </div>
        </div>

      <!-- FOOTER -->
      <footer id="main-footer" class="p-5 bg-dark text-white">
        <div class="row">
          <div class="col">
            <!-- <a href="My resume/CV.docx" download="My Resume" class="btn btn-outline-light" style="border: 1px solid white"><i class="fa fa-cloud"></i>Download Resume</a> -->

            <!-- Footer -->
        <footer style="text-align: center;">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ojugosamson {{\Carbon\Carbon::now()->year}}</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
          </div>

          <!--  <div class="col-sm-4 text-right">
            <a class="" href="#myPage" data-toggle="tooltip">
            <span class="fa fa-arrow-up" id="fafa" style="color: white"></span>
          </div> -->
          </div>
        <div class="row">
         
          
        </div>
        
      </footer>
    </div>


  </div>
	



  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script>
    $('.port-item').click(function(){
      $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  </script>
</body>
</html>