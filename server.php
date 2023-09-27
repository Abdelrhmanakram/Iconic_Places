<?php
include 'conn.php';
?>
<?php
if(!isset($_SESSION)){
    session_start();} 
    $error=array();
    if(isset($_POST['username'])){
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $conpassword=mysqli_real_escape_string($conn,$_POST['conpassword']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        
        if(empty($username)){
            array_push($error,"Username is required");
        }
        if(empty($email)){
            array_push($error,"Email is required");
        }
        if(empty($password)){
            array_push($error,"Password is required");
        }
        if(empty($conpassword)){
            array_push($error,"Confirm password is required");
        }
        if($password!=$conpassword){
            array_push($error,"Passwords do not match");
        }
        
        if(count($error)==0){
            
             // Check if email address already exists
             $query = "SELECT * FROM `user` WHERE `email`='$email'";
             $results = mysqli_query($conn, $query);
             if (mysqli_num_rows($results) > 0) {
                 // Email address already exists
                 echo "This email address is invalid.";
             } else {
                 // Insert into database
                 $sql="INSERT INTO user(username,email,password,conpassword,phone) Values('$username','$email','$password','$conpassword','$phone')";
                 $result=mysqli_query($conn,$sql);
             }
         }
        
        
        }
        
        
        //login
        
        
       

//login



//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset ($_SESSION['email']);
    header('location:home.php');}

//form wedding





 $qy = "SELECT * FROM `user`"; //
$res = mysqli_query($conn, $qy);


if (mysqli_num_rows($res) == 1) {
    $fetch = mysqli_fetch_array($res);

    $_SESSION['id'] = $fetch['id'];
    $user_id = $_SESSION['id'];
}



if (isset($_POST['wedd'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['name']);
    $user_id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $person = mysqli_real_escape_string($conn, $_POST['capacity']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $from = mysqli_real_escape_string($conn, $_POST['from']);
    $to = mysqli_real_escape_string($conn, $_POST['to']);
    $comm = mysqli_real_escape_string($conn, $_POST['note']);
    if (count($error) == 0) {

        $qy = "SELECT * FROM `book_wedd` where f='$from' and t='$to'"; //
        $res = mysqli_query($conn, $qy);
        if (mysqli_num_rows($res) > 0) {
            echo "pls choose another date or time";
        } else {
            $ff = "INSERT INTO `book_wedd`(`name`,`user_id`, `email`, `phone` , `capacity` ,`date`,`f`,`t`,`note`) Values('$fullname','$user_id','$email','$phone','$person','$date',' $from','$to','$comm')";
            mysqli_query($conn, $ff);
            echo '<script> alert("Welcome") </script>';
            header('location:thankk.php');}
        ;}
        }
  //select cond 3   numrows == 1 founded 
  // if(count($error)==0){
//   $ff="INSERT INTO `book_wedd`(`name`, `user_id`, `email`, `phone` , `capacity` ,`date`,`f`,`t`,`note`) Values('$fullname','$user_id','$email','$phone','$person','$date',' $from','$to','$comm')";
//   mysqli_query($conn,$ff);
//   echo '<script> alert("Welcome") </script>';
//   header('location:thankk.php');
  
  







  
   
    

          //form event 
          $qy = "SELECT * FROM `user`";
        $res = mysqli_query($conn, $qy);
    
   
        if (mysqli_num_rows($res) == 1) {
            $fetch = mysqli_fetch_array($res);
           
			 $_SESSION['id']=$fetch['id'];
			$user_id = $_SESSION['id'];
        }
           
if(isset($_POST['event'])){
    $fullname=mysqli_real_escape_string($conn,$_POST['name']);
    $user_id=mysqli_real_escape_string($conn,$_SESSION['id']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $person=mysqli_real_escape_string($conn,$_POST['capacity']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    $from=mysqli_real_escape_string($conn,$_POST['from']);
    $to=mysqli_real_escape_string($conn,$_POST['to']);
    $comm=mysqli_real_escape_string($conn,$_POST['note']);
    if(count($error)==0){
    $ff="INSERT INTO `book_event`(`name`, `user_id`, `email`, `phone` , `capacity` ,`date`,`f`,`t`,`note`) Values('$fullname','$user_id','$email','$phone','$person','$date',' $from','$to','$comm')";
    mysqli_query($conn,$ff);
    echo '<script> alert("Welcome") </script>';
    header('location:thankk.php');
    }
    }
                //confernece
                $qy = "SELECT * FROM `user`";
        $res = mysqli_query($conn, $qy);
    
   
        if (mysqli_num_rows($res) == 1) {
            $fetch = mysqli_fetch_array($res);
           
			 $_SESSION['id']=$fetch['id'];
			$user_id = $_SESSION['id'];
        }
           
if(isset($_POST['conf'])){
    $fullname=mysqli_real_escape_string($conn,$_POST['name']);
    $user_id=mysqli_real_escape_string($conn,$_SESSION['id']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $person=mysqli_real_escape_string($conn,$_POST['capacity']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    $from=mysqli_real_escape_string($conn,$_POST['from']);
    $to=mysqli_real_escape_string($conn,$_POST['to']);
    $comm=mysqli_real_escape_string($conn,$_POST['note']);
    if(count($error)==0){
    $ff="INSERT INTO `book_conf`(`name`, `user_id`, `email`, `phone` , `capacity` ,`date`,`f`,`t`,`note`) Values('$fullname','$user_id','$email','$phone','$person','$date',' $from','$to','$comm')";
    mysqli_query($conn,$ff);
    echo '<script> alert("Welcome") </script>';
    header('location:thankk.php');
    }
    }