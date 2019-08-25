<?php

include('dbname.php');
$counter=$_REQUEST['counter'];

$update="UPDATE `posts` SET `counter`='$counter',`approved`='Yes' WHERE `counter`='$counter' ";

$result=mysqli_query($conn,$update);

if($result){
	header("Location:Admin.php");
}
else
{
	echo "Update Failed".mysqli_error();
}
?>