<?php
include 'db_connection.php';
include 'templates/bartender.html';
session_start();

$conn = OpenCon();
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);
$_SESSION['numRows'] = mysqli_num_rows($result);
if($_SESSION['numRows'] > 0) {
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['name'];
        $drinks = $row['drinks'];
        
        $output = '<table><tr><td><b>'.$name.'</b></td><td>'.$drinks.'</td><td></table>';
        echo $output;
    }


}
function delete($name) {
    $conn = OpenCon();
    $sql = "DELETE FROM orders WHERE name = '$name'";
    if ($conn->query($sql) === TRUE) {
        echo "record deleted successfully";
    }
    else {
        echo "error deleting record " . $conn->error;
    }
    
}
CloseCon($conn);
?>