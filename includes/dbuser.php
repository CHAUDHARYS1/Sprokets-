<?php
$servername = "localhost";
$username = "Iruser";
$password = "V*hHh9nygq]O";
$database = 'localrun';

// Create connection
$lrconnect = mysqli_connect($servername, $username, $password, $database)
	or die("Database Connection Failed". mysqli_error());
$select_db = mysqli_select_db($lrconnect,$username);
?>
