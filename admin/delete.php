<?php

include('dbname.php');

$counter=$_GET['counter'];

	$query=" DELETE FROM posts WHERE counter =$counter";
	$result=mysqli_query($conn,$query);

	if($result){
		header("Location:Admin.php");
	}
	else{
		echo "Please check your data";
		echo mysqli_error($conn);
		
	}
 

?>