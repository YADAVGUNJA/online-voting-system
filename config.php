<?php
/* This file contains database configuration assuming you are running mysql using user "root" and password =""
*/

$servername = "localhost";
	$username = "root";
	$password = "";
	$db="login";
//Try to connecting to the  database
    $conn = mysqli_connect($servername, $username, $password,$db);

    // check the connection

    if($conn ==false){
        dir('Error:cannot connect');
    }
?>
