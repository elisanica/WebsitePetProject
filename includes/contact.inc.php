<?php
require 'conectare.php';


if (!empty($_POST['username']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

$username=strtolower($_POST['username']);    
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql="SELECT username FROM user WHERE username = '$username'";
$result = mysqli_query($conectare,$sql);
$check=mysqli_num_rows($result);

if($check > 0)
{
    header("Location:../contact.php?info=exista");
    die();
  }  else
    {
        $sql="INSERT INTO user (username,first_name,last_name,email,message) VALUES('$username','$firstname','$lastname','$email','$message')";
        $result =  mysqli_query($conectare,$sql);
        header("Location:../contact.php?info=ok");
    }
}
else{
    header("Location:../contact.php?info=eroare");
}