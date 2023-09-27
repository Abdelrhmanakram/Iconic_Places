<?php
include 'server.php';
include 'conn.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conference Page</title>
        <link rel="stylesheet" href="co.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>


<header>
<div class="b">

    <div class="logo">
        <img src="img/logo.gif" alt="Logo" style="float:left;width:300px;height:55px;">
     </div>
<div class="h">
<nav>
<a href="home.php">Home</a>
<a href="services.php">Services</a>
<a href="complaint.php">Complaint</a>
<a <?php  if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
  echo $username;
  echo "<br>";
     echo '<form class="logout" action="server.php"> <button  name="logout">logout</button></form>';
      
    }else {

        echo ' <a   href=login1.php>Sign in</a> ';}
      ?> </a>
<div class="animation start-home"></div>
</nav>
</div>



<div class="maintext">
      <p>The best ideas come from the most unexpected places</p>
   
	 <form action="#places" method="post">
        <button type="submit" name="all" class="button"> Have a Look</b>
		<style>
.button{
   background-color: #8f7cec; 
   border: none; 
   color: white; 
   border: 2px solid rgb(3, 3, 45);
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
   border: 2px solid rgb(3, 3, 45);
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
</div>

</header>
<body>
 
<div class="card "style="margin-top: 10px; margin-bottom: 10px; background-color:#ece9fc;" id="places"> 
  <div class="card-body">
 
    <h1 class="card-title" style="text-align:center;"> <i> We sorted for you the best places to view in Cairo and Giza </i></h1>
  </div>

  <div class="card-body" style="text-align:center;">
    <br>
  <form method="post">
<label><h3>Sort Product By</h3></label>
 <select name="sorting" required style="background-color: #fff; color: #333; padding: 10px; border: 1px solid #ccc; border-radius: 3px; margin-right: 10px; width:250px;">
		   <option value="all">All Places </option>
           <option value="low"> Price: Low to High </option>
           <option value="high"> Price: High to Low </option>
		   <option value="cairo"> Cairo </option>
		   <option value="giza"> Giza </option>
        </select>
      <button name="Bsort" style="background-color: #8f7cec; color:#fff; border: none; border-radius: 3px; padding: 10px 30px; font-size: 16px; cursor: pointer;box-shadow: 2px 2px 5px rgba(0,0,0,0.3);">Sort</button>	
</form>
  </div>
  
</div> 

    

<script type="text/javascript">
  
 const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
myInput.focus()
})
</script><br><br><br>

<div class="services">
<div class="row">
<?php
if (isset($_POST['all'])) {
$qry="SELECT * FROM `confernce`";
$rt=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($rt)){
?>

<div  class="col-sm-5" id="loll">

  <figure> <img  src="<?php echo $row['image'];?>" width="450px" height="200px" alt="failed" ></figure>
<figcaption> <h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3><br>Price:<?php echo $row['price'];?></h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>

<?php
}
}
?>
</div>

<!----------------------------SORT----------------------------->

<div class="services">
<div class="row">
<?php
if (isset($_POST['Bsort'])){
$opt=$_POST['sorting'];
if ($opt=="low") {
$qq="select * from `confernce` order by `price` ASC";
$re=mysqli_query($conn,$qq);
while ($row=mysqli_fetch_array($re)) {
?>

<div  class="col-sm-5" id="loll">

  <figure> <img src="<?php echo $row['image'];?>" width="450px" height="250px" alt="" ></figure>
<figcaption> <h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3>Price:<?php echo $row['price'];?></h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>

<?php 
}
}
else if($opt=="high"){
$qq="select * from `confernce` order by `price` DESC";
$re=mysqli_query($conn,$qq);
while ($row=mysqli_fetch_array($re)) {
?>

<div  class="col-sm-5" id="loll">

  <figure> <img src="<?php echo $row['image'];?>" width="450px" height="250px" alt="" ></figure>
<figcaption><h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3>Price:<?php echo $row['price'];?></h3> 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>


<?php 
}
}
else if($opt=="cairo"){
$qq="select * from `confernce` WHERE `name`LIKE'%$opt%'";
$re=mysqli_query($conn,$qq);
while ($row=mysqli_fetch_array($re)) {
?>

<div  class="col-sm-5" id="loll">

  <figure> <img src="<?php echo $row['image'];?>" width="450px" height="250px" alt="" ></figure>
<figcaption> <h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3>Price:<?php echo $row['price'];?></h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>


<?php 
}
}
else if($opt=="Giza"){
$qq="select * from `confernce` WHERE `name`LIKE'%$opt%'";
$re=mysqli_query($conn,$qq);
while ($row=mysqli_fetch_array($re)) {
?>

<div  class="col-sm-5" id="loll">

  <figure> <img src="<?php echo $row['image'];?>" width="450px" height="250px" alt="" ></figure>
<figcaption> <h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3>Price:<?php echo $row['price'];?></h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>

<?php 
}
}
else{
$qq="select * from `confernce`";
$re=mysqli_query($conn,$qq);
while ($row=mysqli_fetch_array($re)) {
?>

<div  class="col-sm-5" id="loll">

  <figure> <img src="<?php echo $row['image'];?>" width="450px" height="250px" alt="" ></figure>
<figcaption><h2><?php echo $row['name'];?></h2> <h5><?php echo $row['des'];?> </h5><h3>Price:<?php echo $row['price'];?></h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
book now
</button>

<!-- Modal --> <!--------popup booking------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Form <style>h5{text-align:center;}</style></h5>
	  </div>
        <form action="" method="post" id="book" >
       <div class="ip">
       <style>
	
	input{
	border: 1px solid #ccc;
	padding: 10px;
	border-radius: 5px;
	}
	
	
	
    .btn {
      background-color: #8f7cec;
      border: none;
      color: white;
      padding: 10px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 2px 2px;
      cursor: pointer;
      border-radius: 20px;
    }
	
  </style>
     <input type="text" name="name" placeholder="Full Name" class="namee"> <br> <br>
     <input type="email" name="email" placeholder="Email" class="namee"> <br><br>
     <input type="tel" name="phone" placeholder="Phone Number" class="namee"> <br><br>
     <input type="number" name="capacity" placeholder="no. of person" class="namee"> <br><br>
     <input type="date" name="date" placeholder="Date" class="namee"> <br><br>
  <label for="from">From</label>
     <input type="time" name="from" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;"> 
  <label for="to">To</label> 
     <input type="time" name="to" placeholder="Choose The Time" class="namee" style="	display: inline-block; vertical-align: middle;">
     <input type="text" name="note" placeholder=" Place's Name" class="namee"> 
       </div>
	   <div class="model-footer">
       <button type="submit" name="conf" class="btn" > BookNow</button>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</form>

      </div>

   
</div>
</div>
</div>
</figcaption>
</div>

<?php
}
}
}
?>
</div>

<br><br><br>

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