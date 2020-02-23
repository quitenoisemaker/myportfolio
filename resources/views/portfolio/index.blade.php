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
  

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="prof_pic/pic.jpg" class="image">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white" style="padding: 4em !important;">
              <div class="name d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Ojugo Samson Ehis</h1></div>
                <div class="d-flex flex-row">
                <div><i class="fab fa-twitter" id="fafa"></i></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><i class="fab fa-facebook" id="fafa"></i></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><i class="fab fa-instagram" id="fafa"></i></div>&nbsp&nbsp&nbsp&nbsp&nbsp
                <div><i class="fab fa-github" id="fafa"></i></div>
                
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
                <div class="port-item p-2 bg-white text-dark" data-toggle="collapse" data-target="#resume">
                  <i class="fa fa-graduation-cap d-block" id="fafa"></i>Resume
                </div>
                <div class="port-item p-2 bg-dark" data-toggle="collapse" data-target="#work">
                  <i class="fa fa-folder-open d-block" id="fafa"></i>Work
                </div>
                <div class="port-item p-2 bg-white text-dark" data-toggle="collapse" data-target="#blog">
                  <i class="fa fa-folder-open d-block" id="fafa"></i>Blog
                </div>
                <div class="port-item p-2 bg-dark text-white"
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
        <p class="lead"> I'm an IT personel expert and a Web Developer. During this years of being a developer I have learnt a lot in the application of programming language in developing applications.
        I have worked on several projects with impressive success rates because of my focus, detailed processes, uniqueness and creative insight.
        I’m also an experience WORDPRESS DEVELOPER, I also enjoy making WHITEBOARD ANIMATION and CHATBOT using the Watson Assistance Tools.
 </p>
      </div>

      <div class="card card-body py-5">
        <h3>My skills</h3>
        <p> I’m skilled in HTML, CSS, BOOTSTRAP, JAVASCRIPT (jQuery), Ajax, PHP and Laravel.  </p>
        <hr>
        <h4>HTML</h4>
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
        </div>
      </div>
      
    </div>
     
      <!-- RESUME -->
      <div id="blog" class="collapse">
        <div class="card card-body bg-dark text-white py-5">
          <h2>My Blog</h2>
          
        </div>
        <div class="card card-body py-5">
          

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col">

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>

        </div>
        </div>
        
      </div>

      <!-- RESUME -->
      <div id="resume" class="collapse">
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
        
      </div>

       <!-- WORK  -->
        <div id="work" class="collapse">
          <div class="card card-body bg-dark text-white py-5">
            <h3>My Portfolio</h3>
            <p class="lead">Here is my portfolio which comprises of some of the works I've done.</p>
          </div>

          <div class="card card-body py-5">
            <h3>My Designs/Works</h3>
            <p>Some of my works which range from graphic design works, Wordpress designs, Website designs with Bootstrap, JQuery and PHP and so on.</p>
          <div class="row">
            <div class="col-md-3">
              <a href="port/1.jpg" data-toggle="lightbox">
              <img src="port/1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3"><a href="port/2.jpg" data-toggle="lightbox">
              <img src="port/2.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/3.jpg" data-toggle="lightbox">
              <img src="port/3.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/4.jpg" data-toggle="lightbox">
              <img src="port/4.jpg" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              <a href="port/5.jpg" data-toggle="lightbox">
              <img src="port/5.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3"><a href="port/6.jpg" data-toggle="lightbox">
              <img src="port/6.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/7.jpg" data-toggle="lightbox">
              <img src="port/7.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/8.jpg" data-toggle="lightbox">
              <img src="port/8.jpg" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>

          <div class="row">
            <div class="col-md-3">
              <a href="port/14.jpg" data-toggle="lightbox">
              <img src="port/14.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3"><a href="port/10.jpg" data-toggle="lightbox">
              <img src="port/10.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/11.jpg" data-toggle="lightbox">
              <img src="port/11.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/17.jpg" data-toggle="lightbox">
              <img src="port/17.jpg" alt="" class="img-fluid"></a></div>
            
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
              <a href="port/12.jpg" data-toggle="lightbox">
              <img src="port/12.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md-3"><a href="port/9.jpg" data-toggle="lightbox">
              <img src="port/9.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/15.jpg" data-toggle="lightbox">
              <img src="port/15.jpg" alt="" class="img-fluid"></a></div>
            <div class="col-md-3"><a href="port/13.jpg" data-toggle="lightbox">
              <img src="port/13.jpg" alt="" class="img-fluid"></a></div>
            
          </div>

          </div>
        </div>

        <!-- CONTACT -->
        <div id="contact" class="collapse">
           <div class="card card-body bg-dark text-white py-5">
             <h2>Contact</h2>
             <p class="lead">You can get to contact me from any of the social media platform above</p>
             <p class="lead">You can also contact me by calling these lines <a href="07051194940">07051194940</a> or <a href="08127519696">08127519696</a></p>
           </div>
           <div class="card card-body py-5">
             <h3>Get in touch</h3>
             <p>Feel free to contact Us and we will be glad to hear from you</p>
          
          <?php
          if (isset($_POST['submit'])) {
          $u_name= htmlentities($_POST['u_name']);
          $u_email= htmlentities($_POST['u_email']);
          $u_message= htmlentities($_POST['u_message']);
          if (empty($u_name) || empty($u_email) || empty($u_message)) {
           echo "<span class='alert-danger text-center'><b>One or more field is empty!</b></span>";
              }else{
                $to = 'ojugosamson007@gmail.com';
                $subject = 'Contact form submitted';
                $body = $u_name. "\n".$u_message;
                $headers = 'From: '.$u_email;
                if (@mail($to, $subject, $body, $headers)) {
                  echo 'Thanks for contacting us. We\'ll be in touch soon.';
                }else{
                  echo "Sorry, an error occured. Please try again later.";
                }
              }
              }
          ?>
          <br>
          <form method="POST" action="portfolio2.php">
            <div class="form-group">
              <div class="input-group ">
                <span class="input-group-addon bg-dark text-white">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" name="u_name" class="form-control bg-white text-dark" placeholder="Enter your name" value="<?php if (isset($_POST['submit'])) { echo $_POST['u_name']; }?>" required="" maxlength="25">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <span class="input-group-addon bg-dark text-white">
                  <i class="fa fa-envelope"></i>
                </span>
                <input type="email" name="u_email" class="form-control bg-white text-dark" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])) { echo $_POST['u_email']; }?>" required="" maxlength="50">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group ">
                <span class="input-group-addon bg-dark text-white">
                  <i class="fa fa-pencil"></i>
                </span>
                <textarea rows="5" name="u_message" class="form-control bg-white text-dark" placeholder="Enter your message" style="resize: none;" value="<?php if (isset($_POST['submit'])) { echo $_POST['u_message']; }?>" required="" maxlength="1000"></textarea> 
              </div>
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-dark btn-block btn-lg">
          </form>
           </div>
        </div>

      <!-- FOOTER -->
      <footer id="main-footer" class="p-5 bg-dark text-white">
        <div class="row">
          <div class="col-sm-8">
            <a href="My resume/CV.docx" download="My Resume" class="btn btn-outline-light" style="border: 1px solid white"><i class="fa fa-cloud"></i>Download Resume</a>
          </div>

           <div class="col-sm-4 text-right">
            <a class="" href="#myPage" data-toggle="tooltip">
            <span class="fa fa-arrow-up" id="fafa" style="color: white"></span>
          </div>
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