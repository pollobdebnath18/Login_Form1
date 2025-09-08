<?php
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $databasename = "labfinal";
    $port = 3307;    

    $connect = mysqli_connect($servername, $username, $password, $databasename, $port);

    if (!$connect) {
        die("This connection Failed failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }

?>