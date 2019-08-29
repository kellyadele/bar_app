<?php
include "templates/index.html";
session_start();
if(isset($_POST['patron'])) {
    $_SESSION['patron'] = $_POST['patron'];
    header("location: patron.php");
}
?>