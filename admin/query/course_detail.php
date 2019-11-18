<?php
include '../../connection.php';
if(isset($_POST['submit'])){
    $file_name = $_FILES['courseCover']['name'];
    $file_size =$_FILES['courseCover']['size'];
    $file_tmp =$_FILES['courseCover']['tmp_name'];
    $file_type=$_FILES['courseCover']['type'];
    $content = $_POST['content'];
    $courseDescription = htmlentities($content);
   
    $searchQuery = "SELECT * FROM `coursedetail` WHERE course_id ='$course_id'";
    $search_result = mysqli_query($conn, $searchQuery);
    if (mysqli_num_rows($search_result) > 0) {
        # code...
        $courseUpdate = "UPDATE `coursedetail` SET courseCover='$file_name', `courseDescription`='$courseDescription' WHERE `course_id` = '$course_id'";
        $courseUpdateResult = mysqli_query($conn, $courseUpdate);
        if($courseUpdateResult){
            move_uploaded_file($file_tmp,"../images/courseCover/".$file_name);
         
           
        }
        else{
            echo "error ".mysqli_error($conn);
        }
    }
 
    else{
     
 
        $courseQuery = "INSERT INTO `courseDetail` (`course_id`, `courseDate`, `courseCover`, `courseDescription`) VALUES ('$course_id', CURRENT_DATE(), '$file_name', '$courseDescription')";
        $courseResult = mysqli_query($conn, $courseQuery);
        if($courseResult){ 
            move_uploaded_file($file_tmp,"../images/courseCover/".$file_name);
            header("page:admission");
           
        }
        else{
            echo "error ".mysqli_error($conn);
        }
    }
    
 
  
  
 }
 




?>