<?php
$servername = "localhost";
$username = "localrun_admin";
$password = 'X]H,r$F_bTnS';

// Create connection
$lrconnect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$lrconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
