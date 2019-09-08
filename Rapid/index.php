<?php
//creating variables used to enable login to server

$servernmae = 'localhost';
$username = 'root';
$password = '';







$conn = mysqli_connect($servernmae, $username, $password);
$sql = 'CREATE DATABASE IF NOT EXISTS EcoFriendly';



if (mysqli_query($conn, $sql)){
    echo 'successful';
}
else{
    echo 'error'.mysqli_error($conn);
}

?>
