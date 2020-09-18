<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style> 
    .nav-item :hover{
      color:white;
    }
     .fa {
  padding: 0px;
  font-size: 30px;
  width: 50px;
  height: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: black;
  color: white;
  margin-left: 00px;
}

#img{
  transition: width 2s, height 2s, transform 2s;
  border-radius: 100%;
}
#img:hover{
  width: 300px;
  height: 300px;
  transform: rotate(360deg);
}

@media (min-width: 768px) {
.carousel-multi-item-2 .col-md-3 {
float: left;
width: 25%;
max-width: 100%; } }

.carousel-multi-item-2 .card img {
border-radius: 2px; }

/* Twitter */
.fa-twitter {
  background: black;
  color: white;
  margin-left: 0px;
}
.fa-linkedin {
  background: black;
  color: white;
  margin-left: 0px;
}

#one{
  animation:anim 15s  ;
  padding:10px;
}
#two{
  color:red;
}

@keyframes anim{
    0%{ color:aqua;}
    25%{ color:teal; transform: scale(1.5);}
    50%{ color:yellow; transform: scale(0.8);}
   75%{ color:green; transform: scale(1.5);}
    100%{ color:pink; transform: scale(1);}
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: transparent;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-left: 70px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color:black;
  color: white;
  text-decoration:none;
  text-underline-position: none;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: transparent;
  color: red;
  text-decoration:none;
  
  text-underline-position: none;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
  </style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel ="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
       <title>SHIVANGI SRIVASTAVA</title>
  </head>
  <body style="background-color:black;">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="padding-left:220px; ">
  <!-- Brand -->
  

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#home" style="color:red;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutme" style="color:red;">ABOUT ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#resume" style="color:red;">RESUME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services" style="color:red;">MY SKILLS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#connect" style="color:red;">GET IN TOUCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#collection" style="color:red;">MY WORKS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact" style="color:red;">MY CONTACT DETAILS</a>
      </li>
    </ul>
  </div>
</nav>

<div class="home" style="background-image: url(images/io.jpg); width:100%; height:100%;padding:60px;" id="home" >
<div class="row intro-text align-items-center justify-content-center">
        <div class="col-md-10 text-center pt-5" style="color:white;">

<h1  id="one" class="site-heading site-animate">Hello, I'm <strong  class="d-block">SHIVANGI SRIVASTAVA</strong></h1>
  
        </div>
    </div>
</div>
</div> <!-- section -->
<br>
<br>
<center>

 <div class="container-fluid" id="aboutme"   >
<div  style="background-color:black; width:100%;">  <!--
 <img src="images/shiv.jpeg" style="width:40%; height:30%; float:inline; " > -->
 
   <div class="jumbotron-jumbotron-fluid" style="float:inline; margin-left:50px; background-color:black;">
   <div class="container " >
  <h1 STYLE="COLOR:WHITE; text-align:center"  class="w3-center w3-animate-right">  ABOUT ME</H1>
    <p  class="w3-center w3-animate-right" style=" text-align:center;color:red;font-size:large; text-transform: uppercase;  ">
    Unequivocal Zeal to learn and experiment with every opportunity that comes on the way. <br>
   web developer enthusiast || WEB DESIGNING 
     <br>
     Positive attitude towards life . Hustle hard to make my own way. Have good management skills. 
   </strong>
</p>
     
   <img src="images/me.jpg" style="width:40%; height:40%; margin-left:20px; " id="img" >  <br> <br>
  
   <A HREF="#contact"> <button type="button" class="btn btn-outline-danger" style="border-color:red;color:white;  margin-left:50px;" >
   Hire me</button> </a> &nbsp; &nbsp; &nbsp; &nbsp;  <br> <br>
 <A HREF="https://drive.google.com/file/d/1oi0UwYSPIis9ijn0KSH0Z2DOgqQGp5Rp/view?usp=sharing" target="blank"  > 
 <button type="button" class="btn btn-outline-danger" style="border-color:red; color:white; margin-left:20px;">Download CV</button> </a>
 </p>  
  </div>
</div> 

  </center>
</div>
</div> </br> 
<div class="container" ID="resume" >
  <h1 class="text-center" style="color:white;"> RESUME </H1>
  <div class="w3-center w3-animate-left"  >
  <div class="row" style="font-size:large;">
  <div class="col-sm-6" >
    <div class="card" style="border-color:black;">
      <div class="card-body" style="background-color:black;">
        <h5 class="card-title" style="color:white;">EDUCATION</h5>
        <p class="card-text"  style="color:red;">     Dr Shakuntala Misra National Rehabilitation University <br> Lucknow
        <br>
         Bachelor Of Technology 
      <br> Computer  Science engineering
      <br> 2017-2021 <br>
  
    </p>
      
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="border-color:black;">
      <div class="card-body" style="background-color:black;">
        <h5 class="card-title"  style="color:white;"> WORK EXPERIENCE</h5>
        <P  style="color:red;"> Software Engineer  Intern 
        <br>Akestech Infotech
         Private Limited <br>Lucknow</p>
      </div>
</div>
    
  </div>
<br>

  <div class="col-sm-6">
    <div class="card" style="border-color:black;">
      <div class="card-body" style="background-color:black;">
        <h5 class="card-title"  style="color:white;"> SCHOOLING</h5>
        <p class="card-text"  style="color:red;">   Tagore Public School <br> Prayagraj <br>
        class of 10th : 2014
        <br>
        class of 12th : 2016
     </p>
    
        
      </div>
    </div>
  </div>
  <br>
  <div class="col-sm-6" >
    <div class="card" style="border-color:black;">
      <div class="card-body" style="background-color:black;">
        <h5 class="card-title"  style="color:white;">ACHIEVEMENTS</h5>
        <p class="card-text"  style="color:red;" >R.D.S.O summer internship (2019)
        <br>S.E.O Virtual internship (2020) 
        <BR> N.I.T Silchar Summer Internship (2020) <br>
        Microsoft Virtual internship from inside sherpa(2020)</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<br>

 <!-- </div> -->
 <div class="container" id="services" style="background-color:black; height:100%; width:100%;">
<h1 class= text-center style ="color:white; "> 
MY SKILLS </h1> <br>

 <ul Class="text-center"  type="none" style="color:red;"> 
   <LI class=  "w3-center w3-animate-left"  > HTML5<LI> <br>
   <LI  class=  "w3-center w3-animate-right" > CSS3<LI> <br>
   <LI  class=  "w3-center w3-animate-left" > JAVASCRIPT & JQUERY</LI><br>
   <LI  class=  "w3-center w3-animate-right" > BOOTSRAP</LI> <br> 
   <LI  class=  "w3-center w3-animate-left" > WORDPRESS</LI> <br>
   <LI  class=  "w3-center w3-animate-left" >   PHPMYADMIN</LI> <br>
   <LI  class=  "w3-center w3-animate-right" > PHP</LI> <br>
   <LI  class=  "w3-center w3-animate-left" > MVC</LI><br>
   <LI  class=  "w3-center w3-animate-right" > CODE IGNITOR<LI> </ul>
 </div>
 <br> 



<div class="container" id="connect" style="background-color:black; color:red;"> <section>
   <h1 class="text-center" style="color:white;">   GET IN TOUCH </H1>   
   <form action="action.php" method="POST">
   <div class="form-group">
    <label for="exampleInputPassword1"  style=" color:white;">Your Name</label>
    <input type="text" class="form-control"  style="background-color:black;color:red;border-color:red;" 
    id="exampleInputPassword1" name="name1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style=" color:white;"> Your Email </label>
    <input type="email" class="form-control" 
    id="exampleInputEmail1"  style="background-color:black;color:red; border-color:red;" 
    aria-describedby="emailHelp" name="email1"> 
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style=" color:white;">Your Phone</label>
    <input type="text" class="form-control" 
    id="exampleInputPassword1"  name="phone1" style="background-color:black;color:red;border-color:red;">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style=" color:white;">Your Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="message1" style="background-color:black;height:200px;color:red; border-color:red;">
  </div> <center>
  <button type="submit" class="btn btn-outline-danger" style="border-color:red;  color:white;" >Send message </button>
  </center>
</form>

</div>
<br>
 
<div class="container-fluid" id="collection">
  <h1 class="text-center" style="color:white;"> MY WORKS </H1>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

  <!--Controls--> <center>
   <div class="controls-top">
    <a class="black-text" href="#multi-item-example" style="color:black;" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    <a class="black-text" href="#multi-item-example"  style="color:black;" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
  </div> </center>
  <!--/.Controls--> 

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\assam.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\diwali.jpeg"            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\vote.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\new.jpeg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\assam.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\diwali.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\new.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\vote.jpeg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\new.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\vote.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\diwali.jpeg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="images\assam.jpeg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>
  

 <div class="container" id="contact">
<h1 class="text-center" style="color:white;"> MY CONTACT DETAILS </H1>
<h4 style="color:white;"> Email </h4> <p style="color:red;">   Shiviyup@gmail.com</p>
<h4 style="color:white;"> Address</h4> <p style="color:red;">   Prayagraj,Uttar Pradesh</p>



 </div>

 <div class="container"> <?php // footer ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<p  class="text-center"style="color:red;">  Proudly Developed By: Shivangi Srivastava </p> <center>
<a href=" https://www.facebook.com/shivangi.srivastav.7547/" class="fa fa-facebook"></a>
<a href=" https://twitter.com/shivang41142349" class="fa fa-twitter"></a> 
<a href="https://www.linkedin.com/in/shivangi-srivastava-86b155169/" class="fa fa-linkedin"></a>  </center>

 </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>