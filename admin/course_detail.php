<?php
include '../includes/connection.php';
if(isset($_POST['course_id'])){
$course_id = $_POST['course_id'];
$query = "SELECT * FROM courseDetail WHERE course_id = '$course_id'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $course_image_cover = $row['courseCover'];
    $courseDescription = html_entity_decode( $row['courseDescription'] );
    echo "$courseDescription ";
}
else{
    echo mysqli_error($conn);
}
}
?>