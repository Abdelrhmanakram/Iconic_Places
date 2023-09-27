 <?php
//session_start();
//$servername="localhost";
//$username="root";
//$password="";
//$dbname="iconicplaces";

//$conn=mysqli_connect($servername,$username,$password,$dbname);

//if(!$conn)
	
//{
	//die("connectionfailed:".$conn->connect_error);
//} 

include 'conn.php';
include 'server.php';

// $qy = "SELECT * FROM `user`";
//         $res = mysqli_query($conn, $qy);
    
   
//        if (mysqli_num_rows($res) == 1) {
//             $fetch = mysqli_fetch_array($res);
            
// 			 $_SESSION['email']=$fetch['email'];
// 			 $_SESSION['username']=$fetch['username'];
// 			 $username=$_SESSION['username'];
// 			 $_SESSION['user_id']=$fetch['id'];
// 			$user_id = $_SESSION['CID'];}
    
    if (isset($_POST['date']) && isset($_POST['user_msg'])&& isset($_POST['type']) && isset($_POST['phone'])) {
        // Get user input from the reservation form
    
    
        // $user_id = $_SESSION['user_id'];
        $date_time = $_POST['date'];
        $phone = $_POST['phone'];
        $complain =$_POST['user_msg'];
        $type = $_POST['type'];
    
        // Prepare SQL statement to insert reservation information into the reservation table
        $sql = "INSERT INTO complaint (date,phone,comment,type) VALUES ( '$date_time','$phone',' $complain','$type')";
        // Execute SQL statement
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("we will call you as soon as possible") </script>' .
            
             header("location:home.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Trip date is missing
        echo "Please provide data.";
    }
    
    // close the database connection
    mysqli_close($conn);
    ?>