<?php 
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
	die("connection unsuccessful:".mysql_connect_error());
}
else{
	echo "connection successful";
}


 ?>