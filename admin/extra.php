<?php
include '../includes/connection.php';
$query = "SELECT * FROM coursedetail";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result)) {
        # code...
        $image = $row['courseCover'];
        $description = $row['courseDescription'];
        $description_decode = html_entity_decode ($description);
        echo "<img src='../images/courseCover/$image' style='width:200px'> <br> $description_decode <hr> ";

    }
}



?>