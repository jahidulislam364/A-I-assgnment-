<?php
$host="localhost";
$uname="root";
$password="";
$bdname="student";
$myconnect=mysqli_connect($host,$uname,$password);


if(mysqli_connect_error())
{ 
echo mysqli_connect_error();
}
else{
	echo "connection successful";
}


?>