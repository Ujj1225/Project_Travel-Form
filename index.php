<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    // Username would be root and password would be blank if we are in local server

    $con = mysquli_connect($server, $username, $password);
    if (!$con)
    {
        die("Connection to this database failed due to" . mysquli_connect_error());
    }
    echo("Success connecting to db")
?>