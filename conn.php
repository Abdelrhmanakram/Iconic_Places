<?php
$servername="localhost";
$username="root";
$password="";
$dbname="iconicplaces";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
	
{
	die("connectionfailed:".$conn->connect_error);
}


?>