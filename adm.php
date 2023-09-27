<?php 
include('conn.php');

if(isset($_POST['eventadd']))
{
   
    $name = $_POST['name'];
    $descr= $_POST['descr'];
    $price = $_POST['price'];
    $image = $_POST['image'];
   
        
    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    $location="events";
    $image=$location.$name;

    $target_dir="events";
    $finalImage=$target_dir.$name;

    move_uploaded_file($temp,$finalImage);

     $insert = mysqli_query($conn,"INSERT INTO events
     (name,descr,price,image ) 
     VALUES ('$name','$descr','$price,'$image')");

     if(!$insert)
     {
         echo mysqli_error($conn);
     }
     else
     {
         echo "Records added successfully.";
     }
 
}
// $error=array();
// //connect to database
// if(isset($_POST['eventadd'])){
// $name=mysqli_real_escape_string($conn,$_POST['name']);
// $descr=mysqli_real_escape_string($conn,$_POST['descr']);
// $price=mysqli_real_escape_string($conn,$_POST['price']);
// $image=mysqli_real_escape_string($conn,$_POST['image']);


// if(count($error)==0){
    
// $sql="INSERT INTO events(name,descr,price,image) Values('$name','$descr','$price','$image')";
// $result=mysqli_query($conn,$sql);

// mysqli_query($conn,$sql);
// }
// }
// $query= "SELECT * FROM `events`";
// $id = $_GET['id'];

// UPDATEevents;
// SETevents.name='name';
// events.PersonCityName=, 
// Per.PersonPostCode=Addr.PostCode
// FROM Persons Per
// INNER JOIN
// AddressList Addr
// ON Per.PersonId = Addr.PersonId
// header ("location:mean.php");

// }
// else{
//     echo "Error modify Record";
// }
?>