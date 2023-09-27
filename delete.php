////////////////////////////user delete//////////////////////////////
<?php 

include('server.php');
$id = $_GET['id'];
$query ="delete from user where `id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean.php");

}
else{
    echo "Error Deleting Record";
}
?>
/////////////////////////////////event delete///////////////////////////////////////
<?php 

include('server.php');
$id = $_GET['e_id'];
$query ="delete from even where `e_id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean2.php");

}
else{
    echo "Error Deleting Record";
}
?>
////////////////////////////////////conference delete////////////////////////////////////
<?php 

include('server.php');
$id = $_GET['c_id'];
$query ="delete from confernce where `c_id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean2.php");

}
else{
    echo "Error Deleting Record";
}
?>
////////////////////////////////////////wedding delete////////////////////////////////////////
<?php 

include('server.php');
$id = $_GET['w_id'];
$ad_id = $_GET['ad_id'];
$categ_id=$_GET['categ_id'];
$query ="delete from wedding where `w_id` ='$id'" ;
$qu ="delete from wedding where `ad_id` ='$ad_id'" ;
$que ="delete from wedding where `categ_id` ='$categ_id'" ;
$del = mysqli_query($conn, $query);
$dele = mysqli_query($conn, $qu);
$delet = mysqli_query($conn, $que);

if($del and $dele and $delet==1) {
mysqli_close($conn);
header ("location:mean2.php");
}
else{
    echo "Error Deleting Record";
}
?>
/////////////////////////////////////////////book event delete///////////////////////////////////////////
<?php 

include('server.php');
$id = $_GET['id'];
$query ="delete from user where `id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean3.php");

}
else{
    echo "Error Deleting Record";
}
?>

/////////////////////////////////////////////book conference delete///////////////////////////////////////////
<?php 

include('server.php');
$id = $_GET['id'];
$query ="delete from user where `id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean3.php");

}
else{
    echo "Error Deleting Record";
}
?>

/////////////////////////////////////////////book wedding delete///////////////////////////////////////////

<?php 

include('server.php');
$id = $_GET['id'];
$query ="delete from user where `id` ='$id'" ;
$del = mysqli_query($conn, $query);

if($del) {
mysqli_close($conn);
header ("location:mean3.php");

}
else{
    echo "Error Deleting Record";
}
?>
<!-- // include('server.php');
// include 'conn.php';
// $id = $_GET['id'];
// $query ="delete from user where `id` ='$id'" ;
// $del = mysqli_query($conn, $query);

// if($del) {
// mysqli_close($conn);
// header ("location:mean.php");

// }
// else{
//     echo "Error Deleting Record";
// }
// ?>
// <?php  
// include('server.php');
// $id = $_GET['id'];
// $query ="delete from confernce where `c_id` ='$id'" ;
// $del = mysqli_query($conn, $query);

// if($del) {
// mysqli_close($conn);
// header ("location:mean2.php");

// }
// else{
//     echo "Error Deleting Record";
// }
// ?>
// <?php 
// include('server.php');
// $id = $_GET['id'];
// $query ="delete from event where `e_id` ='$id'" ;
// $del = mysqli_query($conn, $query);

// if($del) {
// mysqli_close($conn);
// header ("location:mean2.php");

// }
// else{
//     echo "Error Deleting Record";
// }
// ?>

// <?php 
// include('server.php');
// $id = $_GET['w_id'];
// $query ="delete from wedding where `w_id` ='$id'" ;
// $del = mysqli_query($conn, $query);

// if($del) {
// mysqli_close($conn);
// header ("location:mean2.php");

// }
// else{
//     echo "Error Deleting Record";
// }
// ?>