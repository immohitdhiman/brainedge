<?php
include '../../includes/connection.php';
$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $date = $row['date'];
        $course = $row['course'];
        echo "
        <tr>
      
        <td>
            $date
        </td>
        <td>
            $course
        </td>
        <td>
            <div class='dropdown'>
                <button class='btn btn-link btn-sm dropdown-toggle' type='button' id='dropdownMenu1'
                    data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Action
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenu1'>
                    <a class='dropdown-item' href='?page=addCourseDetail&courseID=$id&courseName=$course''>Add Subdetail</a>
                    <a class='dropdown-item' href='?page=editCourse&courseID=$id'>Edit</a>
                    <a class='dropdown-item' id='deleteCourse'  href='?page=admission&deleteCourse=$id'>Delete</a>
                </div>
            </div>

        </td>
    </tr>
        
        
        
        ";
       

    }
}


?>

