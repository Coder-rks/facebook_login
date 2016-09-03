<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fb_login";

$connect = mysqli_connect($host,$user,$pass,$dbname);

if(!$connect){

	echo "not conected";
}



 ?>