<?php
session_start();
include '../includes/connection.php';

?>
<script>
    var addCourseID = $("#addCourseID").val();
    var addCourseName = $("#addCourseName").val();
    $(".courseName").text(addCourseName);
    $(".course_id").val(addCourseID);
    formData = { course_id: addCourseID };

    // $.ajax({
    //     type: "POST",
    //     url: "course_detail.php",
    //     data: formData,
    //     dataType: "text",
    //     success: function (response) {
    //         $("#editor").html(response);
    //         // alert(response);



    //     },
    //     error : function (request, error) { 
    //         alert(error);
    //      }
    // });

</script>



<div class="p-4">
    <h3 class="courseName"></h3>
    <hr>

    <form method="post" id="courseDetail" enctype="multipart/form-data">
        <input type="hidden" class="form-control form-control-sm course_id" name='course_id_detail' value=''>
        <div class="row">
            <div class="col-12 p-2">

                <label class="small" for="customFile">Choose cover Image</label> <br>
                <input type="file" class="form-control-file border  w-25 rounded small p-1" name="courseCover"
                    id="courseCoverImage">
                <div class="py-3">
                    <div id="toolbar-container"></div>

                    <!-- This container will become the editable. -->
                    <div>



                        <textarea name="content" id="editor" value="" style="height: 350px;">

                    <?php
                 if(isset($_SESSION['course_id'])){
                   $course_id = $_SESSION['course_id'];
                                       
                   $query = "SELECT * FROM courseDetail WHERE course_id = '$course_id'";
                   $result = mysqli_query($conn, $query);
                   if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_array($result);
                       $course_image_cover = $row['courseCover'];
                       $courseDescription = html_entity_decode( $row['courseDescription'] );
                       echo "$courseDescription ";
                   }
                   }
                   
                  
                                       



?>
                     </textarea>

                    </div>
                </div>



                <input type="submit" name="submit" onclick=" return submitCourseDetail()" value="Submit"
                    class="btn btn-sm btn-primary">

            </div>
        </div>


    </form>

</div>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

</script>
<!-- <script>
    function submitCourseDetail() {
        var courseCover = $("#courseCoverImage").val();

        var courseDescription = $("#editor").val();
        formData = "courseCover=" + courseCover + "$courseDescription=" + courseDescription;
        if (courseCover == '') {
            $("#courseCoverImage").addClass('border-danger');
            return false;
        }
        else if (courseDescription == '') {
            $("#editor").addClass('is-invalid');
            return false;
        }
        else {

        }
    }
</script> -->