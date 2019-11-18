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
                    <i class='icofont-plus-circle font-weight-bold text-primary'></i> Action
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenu1'>
                    <a class='dropdown-item' href='?page=addCourseDetail&addCourseID=$id&addCourseName=$course''>Description</a>
                    <a class='dropdown-item' onclick='addSubmenu()' class='addSubmenu' id='$id' href='?page=addSubmenu&addCourseID=$id&addCourseName=$course''>Add Submenu</a>
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

