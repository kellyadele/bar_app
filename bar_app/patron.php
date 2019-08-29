<?php
include 'db_connection.php';
include 'templates/patron.html';
session_start();
$drinkArray = $_POST['drinkList'];
$name = $_SESSION['patron'];
if (!$_POST['drinkList'] == null) {
    $conn = OpenCon();
    $sql = "INSERT INTO orders (name, drinks) VALUES ('$name', '$drinkArray')";
    if (mysqli_query($conn,$sql)) {
        header("location: thankyou.php");
    }
    else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    CloseCon($conn);
}

?>