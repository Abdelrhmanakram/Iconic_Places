<html >
  <!--connection-->
  <?php
include 'server.php';
include 'conn.php';


?>
  
<head>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
</head>
<body  style="background-color:whitesmoke" class="container-fluid">
  
<header>
    <div class="logo">
        <img src="img/logo.gif" alt="Logo" style="float:left;width:180px;height:55px;">
     </div>
<div class="h">
    
<nav>
<a href="home.php">Home</a>
<a href="#about">About us</a>
<a href="#contact">Contact us</a>
<a <?php  if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
  echo $username;
  echo "<br>";
     echo '<form class="logout" action="server.php"> <button  name="logout">logout</button></form>';
      
    }else {

        echo ' <a   href=login1.php>Sign in</a> ';}
      ?> </a>
      
<!-- <a href="login1.php">Sign-In</a> -->
<div class="animation start-home"></div>

</nav>
	 
</div>

    <div class="maintext">
      <p>Find Your iconic places</p>
      <br>
    </div>
    <div class="main2">
      <p>We Are Here For You</p>
<?php 
    if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
      // the user is logged in, display the link
      echo ' <a   href=services.php> Our Services</a> ';
      echo "<br>";
      echo "<br>";

      echo "welcome. you have a 10% discount for first reservation";
  }else {
    echo "you need a registeration to have 100 point for 10% discount";
  }
      
  
//       header('location:login1.php');
//   }
 ?>
       
    </div> 
   
    
  </header>




<div class="card "style="margin-top: 20px ; margin-bottom: 20px; ;"> 
  <div class="card-body">
    <br>
    <br>
    <h1 class="card-title" style="text-align:center; ">Why Would You Choose Us?</h1>
      <p class="card-text" style="text-align:center;">
        We facilitate for our customers to choose from a variety of places that they could easily know all the details about each place without  making a lot of searches.
  </p></div>
</div> 




<div class="row">

  <div class="col-sm-1">
  
  </div>
  <div class="col-sm-10" >

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="event/oasis hotel.jpg" class="d-block w-100" alt="..." width="100% " height="550px" style="opacity:0.9;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Events</h5>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="confernce/waldor astoria.jpg" class="d-block w-100" alt="..." width="100% " height="550px" style="opacity:0.9;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Conference</h5>
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="wedding//Taracina.jpg" class="d-block w-100" alt="..."width="100% " height="550px" style="opacity:0.9;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wedding</h5>
  
      </div>
      
    </div>
  </div>

</div>

<!-- start features-->
<div class="features" id="about us" style="margin-top: 80px;">
  <div class="container">

      <div class="contain">
           <div class="card">
      <div class="face1">
          <div class="content" style="height:180px;color: white; text-align: center; padding-top: 70px;">
          
              <h1>vision</h1>
          </div>
      </div>         
      <div class="face2">
          <div class="content">
              <p>To be the first choice for people in suggestions places and facilitating the route between the users and places all over Egypt.</p>
          </div>
      </div>
  </div>
  
 
  
 <div class="card">
      <div class="face1">
          <div class="content" style="height:180px;color: white; text-align: center; padding-top: 70px;">
             
              <h3>mission</h3>
          </div>
      </div>
      <div class="face2">
          <div class="content">
              <p>To facilitate the process of searching for event venues and conference halls through our web-site for anyone in need (corporate, student activity, start-ups). </div>
      </div>
   </div>

  </div>

     
  </div>
</div>

  <!-- our crew+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  
<!--
<div class="card "style="margin-top: 20px; "> 
  <div class="card-body">
    <h1 class="card-title" style="text-align:center; ">Who we are?</h1>
  
</div> 

<div>
 
</div>
  <section>
   
  
    <div class="row text-center d-flex align-items-stretch">
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #9d789b;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/youssef.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Youssef Ehab</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Student at Level 4 BIS, Helwan University....<br>
              <b>Team 105.</b>
        </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #7a81a8;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/ahmed.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Ahmed Mohamed</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i >Student at Level 4 BIS, Helwan University....<br>
                <b>Team 105.</b>
              </p>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #6d5b98;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/abdo.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Abdelrahman Akram</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Student at Level 4 BIS, Helwan University....<br>
              <b>Team 105.</b>
            </p>
          </div>
        </div>
      </div>
    </div>
     22222222222222222222222222222222222222222222222222222 
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
    
        
      </div>
    </div>
  
    <div class="row text-center d-flex align-items-stretch">
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #cf617b;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/heba.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Heba Ahmed</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Student at Level 4 BIS, Helwan University....<br>
              <b>Team 105.</b>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #b1c14c;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/maryam.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Maryam Ayman</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Student at Level 4 BIS, Helwan University....<br>
              <b>Team 105.</b>
            
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0 d-flex align-items-stretch">
        <div class="card testimonial-card">
          <div class="card-up" style="background-color: #e45656;"></div>
          <div class="avatar mx-auto bg-white">
            <img src="img/salma.jpeg"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h4 class="mb-4">Salma Nagib</h4>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Student at Level 4 BIS, Helwan University....<br>
              <b>Team 105.</b>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>  </div>
</div>
-->
<!--
end crew ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--end features-->


<div class="card "style="margin-top: 20px ;"> 
  <div class="card-body">
    <br>
    <br>
    <h1 class="card-title" style="text-align:center; " id="about">About Us</h1 >
      <p class="card-text" style="text-align:center;">
        Iconic Places FIND YOUR PLACE is an online platform that provides everything to help these who are seeking to have a no mistake event coordination by gathering a wide range of places in one place to facilitate the process of finding the suitable alternatives in a short time
      </p></div>
</div> 
<!-- Site footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <h6>About</h6>
        <p class="text-justify">Iconic Places<i> FIND YOUR PLACE  </i> is an online platform that provides everything to help these who are seeking to have a no mistake event coordination 
            by gathering  a wide range of places  in one place to facilitate the process of finding the suitable  alternatives in a short time</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li>Events</li>
          <li>Conference</li>
          <li>Wedding</li>
         
        </ul>
      </div>

<!--
      <div class="col-xs-6 col-md-3">
        <h6 id="contact">Contact Us</h6>
        <ul class="footer-links">
          <li>Youssef Ehab: 01111602109</li>
          <li>Ahmed Mohamed : 01124190386</li>
          <li>Abdelrahman Akram: 01003905021</li>
          <li>Heba Ahmed : 01116996417</li>
          <li>Maryam Ayman : 01140602229</li>
          <li>Salma Nagib :01013129930</li>
        </ul>
      </div>
-->
      
      <div  class="col-xs-6 col-md-3">
        <h6>Social Accounts</h6>
        <ul class="footer-links">
          <li><a href="https://www.facebook.com/profile.php?id=100093655488705&mibextid=ZbWKwL">Facebook</a></li>
          <li><a href="https://instagram.com/iconicplaces23?igshid=MzNlNGNkZWQ4Mg==">Instagram</a></li>
        
        
      </div>

    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
     <a href="#">Iconic Places</a>. <br> Team 105 BIS, Helwan University
        </p>
      </div>

      
    </div>
  </div>
</footer>






</body>

</html>