

<script>
var addCourseID =  $("#addCourseID").val();
var addCourseName =  $("#addCourseName").val();
$(".courseName").text(addCourseName);

</script>


<div class="p-4">
    <h3 class="courseName"></h3>
    <hr>

    <form enctype="multipart/form-data">
        <input type="hidden" class="form-control form-control-sm courseIdInput" name='courseIdInput' value=''>
        <div class="row">
            <div class="col-12 p-2">

           <label class="small" for="customFile">Choose cover Image</label> <br>
                <input type="file" class=" " id="courseCoverImage">
                
           
            <div class="form-group mt-3">
                <label for="courseAbout">Description</label>
                <p class="small text-black-50 m-0 p-0">HTML code Acceptable</p>
                <textarea name="courseDescription" id="courseDescription" class="form-control form-control-sm" cols="30" rows="10"></textarea>

            </div>
             <button type="button" id='submitCourseDetail' class="btn btn-sm btn-primary">Submit</button>

            </div>
        </div>


    </form>

</div>
<script>
$("#submitCourseDetail").click(function () {
    var courseCover = $("#courseCoverImage").val();
    if(courseCover == ''){
        alert("Opps Something Went Wrong");
    }
  });
</script>