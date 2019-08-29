<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "kellbnrk";
    $dbpass = "eRx8CuFyg1Ba";
    $db = "kellbnrk_bar";
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)
    or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}

function CloseCon($conn) {
    $conn -> close();
}

?>