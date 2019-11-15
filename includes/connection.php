<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "brainedge";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    header('location:includes/dberror.php');
    die("Connection failed: " . $conn->connect_error);
}
else{
    mysqli_select_db( $conn, $database);
}

?>