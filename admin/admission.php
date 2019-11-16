<?php
session_start();
include '../includes/connection.php';




?>

<div class=" p-4">
    <div class=" row">
        <div class=" col-6">
            <h3>Courses</h3>
        </div>

        <div class="text-right col-6">
            <button data-toggle="modal" data-target="#uploadCourse" class=" btn btn-sm btn-dark">Upload</button>
        </div>
    </div class ="">
   

    <table class=" table">
        <thead>
            <tr>
                
                <th>
                    Date
                </th>
                <th>
                    Name
                </th>
                <th>

                </th>
            </tr>
        </thead>

        <tbody id="courseTable"  >
          
        </tbody>
    </table>

</div>


<!-- Upload Course moodle -->

<!-- Button trigger modal -->


<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="uploadCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModal3Label">Upload Courses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Course Name" aria-label="Course Name"
                        aria-describedby="basic-addon1" id="courseInput">
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="submitCourse" " type=" button">Submit</button>
                    </div>
                </div>
                <p class="d-none courseError small ">
                    Opps! Something went Wrong
                </p>



            </div>

        </div>
    </div>
</div>
<script>
    
$("#submitCourse").click(function() {
    
    course = $("#courseInput").val();
    if (course == '') {
        $("#courseInput").addClass('is-invalid').removeClass('is-valid');
        $(".courseError").removeClass('d-none text-success').addClass('text-danger').text(
            'Complete This Fields');
        $("#submitCourse").addClass('btn-danger').removeClass('btn-primary btn-success');
        return false;
    } else {
        formData = {
            course: course
        };
        $.ajax({
            type: "POST",
            url: "query/uploadQuery.php",
            data: formData,
            dataType: "text",
            success: function(response) {
                if (response == 1) {
                    
                    $("#courseInput").addClass('is-valid').removeClass('is-invalid');
                    $(".courseError").removeClass('d-none text-danger').addClass('text-success')
                        .html('<strong>' + course + '</strong> Course Uploaded');
                    $("#submitCourse").addClass('btn-success').removeClass(
                        'btn-primary btn-danger');
                        courseTable();
                } else {
                    $("#courseInput").addClass('is-invalid').removeClass('is-valid');
                    $(".courseError").removeClass('d-none text-success').addClass('text-danger')
                        .html('Opps! Something went wrong' + response);
                    $("#submitCourse").addClass('btn-danger').removeClass(
                        'btn-primary btn-success');
                        
                }
                
            }
        });
    }
    
    
});

function courseTable() {
    $.ajax({
        type: "GET",
        url: "query/getData.php",
        async: false,
        success: function(response) {
            $("#courseTable").html(response);
        },

        error: function (request, error) {
            $("#courseTable").html(error);
          }
        
    });
};

$("#courseTable").ready(courseTable());

</script>
