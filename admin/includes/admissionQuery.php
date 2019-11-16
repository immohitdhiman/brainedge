<?php


if(isset($_GET['deleteCourse'])){
    $courseID = $_GET['deleteCourse'];
    $deleteQuery = "DELETE FROM `courses` WHERE `id` ='$courseID' ";
    $result = mysqli_query($conn, $deleteQuery);
    if($result){
        header("location: ?page=admission");
    }
}

if(isset($_GET['courseID'])){
    $courseID = $_GET['courseID'];
    
    
}
?>