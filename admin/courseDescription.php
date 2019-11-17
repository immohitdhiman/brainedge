<?php
                        if(isset($_GET['addCourseID'])){
$course_id = $_GET['addCourseID'];
$query = "SELECT * FROM courseDetail WHERE course_id = '27'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $course_image_cover = $row['courseCover'];
    $courseDescription = html_entity_decode( $row['courseDescription'] );
    echo $courseDescription;
}
}
?>