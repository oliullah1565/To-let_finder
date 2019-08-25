<?php
$host="localhost";
$username="root";
$password="";
$dbname="tolet_finder_db";
$conn=mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
die("connection failled".mysqli_connect_error());
}
else
{
	//echo "connected";
}

?>