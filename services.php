
<?php include'conn.php';
include 'server.php';?>
<html>
    <head>
        <link rel="stylesheet" href="services.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
       
    
      <header style="background-image:url('img/search5.jpg');background-repeat:no-repeat;background-size:cover;height: 735px;">
        <div class="b">

    <div class="logo">
        <img src="img/logo.gif" alt="Logo" style="float:left;width:300px;height:55px;">
     </div>
<div class="h">
<nav>
<a href="home page.html">Home</a>
<a href="#about">About us</a>
<a href="complaint.php">Complaint</a>
<a <?php  if (isset($_SESSION['email']) && $_SESSION['email'] == true) { 
  echo $username;
  echo "<br>";
     echo '<form class="logout" action="server.php"> <button  name="logout">logout</button></form>';
      
    }else {

        echo ' <a   href=login1.php>Sign in</a> ';}
      ?> </a>
<div class="animation start-home"></div>

            <section>
             <?php
             if (isset($_SESSION['username'])){
             echo $_SESSION['username']; 
             } 
             if (isset ($_SESSION['sucess'])){ 
                 echo $_SESSION['sucess'];  
                unset($_SESSION['sucess']);
                }
         ?>
         </section>
        </nav>  
          </div>
          
     
</div>
        <div class="maintext">
          <form action="#services" method="post">
        <button type="submit" name="all" class="button"> OUR SERVICES</b>
		<style>
.button{
   background-color: #8f7cec; 
   border: none; 
   color: white; 
   width:200px;
   height:auto;
   padding: 15px 32px; 
   text-align: center; 
   text-decoration: none; 
   display: inline-block;
   font-size: 16px; 
   margin: 4px 2px; 
   cursor: pointer; 
   border-radius: 10px; 
}
.button:hover{
   background-color:  #ece9fc;
   color: black;
   height:auto;
   text-align: center;
   border-bottom-right-radius: 50px;
   border-top-left-radius: 50px;
   padding: 20px;
   margin-top: 20px;
   transition: 0.5s;
}
		</style>
		</form>
        </div>
      </header>
	  
	  
	  
  <body>
  <br><br><br>
         <div class="services" id="services">
             <div class="row">
<div  class="col-sm-3" id="lol" onclick="location.href='e.php'" >
<figure> <img src="event/triumph plaza hotel.jpg" width="250px" height="250px" alt="" ></figure>
<figcaption> <h1>Events</h1> This category is to nominate the best event's places for you, through which you can choose the right place for you, and you can also book through us the restaurant you want to go to</figcaption>


</div>
<div class="col-sm-3"  id="lol" onclick="location.href='c.php'">
    <figure> <img src="confernce/waldor astoria.jpg" width="250px" height="250px" alt=""></figure>
    <figcaption><h1>Conference</h1> This category is to nominate the best conference's places for you, through which you can choose the right place for you, and you can also book through us the restaurant you want to go to</figcaption>
</div>
    <div class="col-sm-3"  id="lol" onclick="location.href='w.php'">
        <figure> <img src="wedding/Cest La Vie Villa.jpg" width="250px" height="250px" alt=""></figure>
        <figcaption> <h1>Wedding</h1> This category is to nominate the best wedding's places for you, through which you can choose the right place for you, and you can also book through us the restaurant you want to go to </figcaption>
    </div>
    </div>
<br><br><br>
  <!-- Site footer -->
<footer class="site-footer" id="about">
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