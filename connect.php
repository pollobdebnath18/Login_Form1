<?php
$servername = "localhost";
$username = "root";
$password = "";  // XAMPP default root password is empty
$databasename = "web_60f_crud";
$port = 3307;    // default MySQL port

// Establish connection
$connect = mysqli_connect($servername, $username, $password, $databasename, $port);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
