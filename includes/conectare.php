<?php
$conectare=mysqli_connect('localhost','root','','purrfectmatch');
if(!$conectare){
    die('Conectarea nu a reusit!');
}
echo "Connected successfully!<br>";
?>