<?php
include '../../includes/connection.php';
if(isset($_POST['course'])){
    $course = $_POST['course'];
    date_default_timezone_set('Asia/Kolkata');
     $date = date("d/m/y | h:i:s");
     $query = "INSERT INTO `courses`(`id`, `date`, `course`) VALUES (NULL,'$date','$course')";
     $result = mysqli_query($conn, $query);
     if($result){
         echo "1";
     }
     
}

?>