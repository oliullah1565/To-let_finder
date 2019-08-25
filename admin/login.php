<?php

include_once('../db/crud.php');
$crud = new Crud();

$email = $_POST['email'];
$pass  = $_POST['password'];

if(!empty($email) && !empty($pass))
{
    $query = "SELECT * from user where email='$email' and password ='$pass';";

    $result = $crud->execute($query);
    $res = $result->fetch_assoc();

    if($res){
        session_start();
        $_SESSION['email'] = $res['email'];
        echo 'Logged in';
        header("Location:Admin.php");
    }
    else{
        echo 'Email or Password is wrong.please check your email or password and try again <br>';
        echo '<h3><a href="Adminlogin.php">Back to Login page </a></h>';
    }
}
else
    echo 'Email and password could not be posted.';

// if($res['email'])
// {
//     echo 'user found';
// }else{
//     echo 'user not found';
// }

?>