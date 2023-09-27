<?php
include 'conn.php';
include'server.php';?>
<?php
if (!isset($_SESSION)){
    session_start();
}

if (isset($_POST['email'])) {
    $email = array_key_exists('email', $_POST) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $password = array_key_exists('password', $_POST) ? mysqli_real_escape_string($conn, $_POST['password']) : '';

    if (empty($email) || empty($password)) {
        echo "Please enter your email and password.";
    }
    else {
        $qy = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
        $res = mysqli_query($conn, $qy);
    }
   
        if (mysqli_num_rows($res) == 1) {
            $fetch = mysqli_fetch_array($res);
            
			 $_SESSION['email']=$fetch['email'];
			 $_SESSION['username']=$fetch['username'];
			 $username=$_SESSION['username'];
			 $_SESSION['id']=$fetch['id'];
			$user_id = $_SESSION['CID'];
			

           
            // echo "Welcome customer " . $_SESSION['full_name'];
			header("Location:home.php");
        } 
        else {
            echo "Incorrect password or username!";
        }
        
    }






// if(isset($_POST['email']))
// {

//     $password =mysqli_real_escape_string ($conn,$_POST['password']);
//     $email = mysqli_real_escape_string ($conn,$_POST['email']);
//     $s = "select * from user where email ='$email' AND password ='$password'";
//     $result=mysqli_query($conn,$s);
//     $num=mysqli_num_rows($result);
//     if($num ==1)
//     {
//         $_SESSION['email']  = $email;
//         $_SESSION['username']=$username;

//         header('location:home.php');
//     }
//     else
//     {
//     echo"invalid user";
//     }
// }
?>






<!DOCTYPE html>

<html>


<!--connection-->

    <head>
        <title>Sign In Page</title>
    <link rel="stylesheet" href="login1.css" />
    </head>


<header>
    <div class="logo">
        <img src="img/logo.gif" alt="Logo" style="float:left;width:180px;height:55px;">
     </div>
<div class="h">
    

	 
</div>

</header>

<body style="background-color:rgb(33, 29, 29);">
    <div class="cont">
    <form action="login1.php" method="post">
        <div class="sign-in">
            <h2 style="color:#8f7cec">Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email" required title="Please fill out this field"/>
                <?php

                ?>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required title="Please fill out this field" />
            </label>
            <button type="submit" name="sign" class="submit">Sign In</button>
          
        </div>
        
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            </form>
            <form action="login1.php" method="post">
            <div class="sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Username</span>
                    <input type="text" name="username" required title="Please fill out this field" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required title="Please fill out this field"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" required  title="Please fill out this field"/>
                </label>
                <label>
                    <span>Confirm password</span>
                    <input type="password" name="conpassword" required title="Please fill out this field"/>
                </label>
                <label>
                    <span>Phone</span>
                    <input type="tel" name="phone" required title="Please fill out this field"/>
                </label>
                
                <button type="submit" name="reg"   class="submit">Sign Up</button>
                <!-- <header></header> -->
                
            </div>
        </div>
    </div>
</form>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
 </body>
 <!-- <footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <h6>About</h6>
        <p class="text-justify">Iconic Places<i> FIND YOUR PLACE  </i> is an online platform that provides everything to help these who are seeking to have a no mistake event coordination 
            by gathering  a wide range of places  in one place to facilitate the process of finding the suitable  alternatives in a short time</p>
      </div>

      <div class="col-xs-6 col-md-4">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li><a href="">Events</a></li>
          <li><a href="">Conference</a></li>
          <li><a href="">Wedding</a></li>
         
        </ul>
      </div>

      <div class="col-xs-6 col-md-4">
        <h6 id="contact">Contact Us</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/about/">Youssef Shamy: 01111602109</a></li>
          <li><a href="http://scanfcode.com/contact/">Ahmed Mohamed : 01124190386</a></li>
          <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Abdelrahman Akram: 01003905021</a></li>
          <li><a href="http://scanfcode.com/privacy-policy/">Heba Ahmed : 01116996417</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Maryam Ayman : 01140602229</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Salma Nagib :01013129930</a></li>
        </ul>
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


    
</html> -->