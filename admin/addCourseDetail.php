<?php
include '../includes/connection.php';


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
           ?>
<script>
$(".phpQuery").addclass('text-success').removeClass('d-none').html("<strong> Data Updated .. </strong>");

</script>

           <?php
        
          
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
           ?>
           <script>
           $(".phpQuery").addclass('text-success').removeClass('d-none').html("<strong> Data Uploaded .. </strong>");
           
           </script>
           
                      <?php
          
       }
       else{
           echo "error ".mysqli_error($conn);
       }
   }
   

 
 
}





?>



<div class="p-4">
    <h3 > <?php echo  $course_name; ?> </h3>
    <hr>

    <form method="post" id="courseDetailForm" enctype="multipart/form-data">
        <!-- <input type="hidden" class="form-control form-control-sm course_id" name='course_id_detail' value='<?php echo  $course_id; ?>'> -->
        <div class="row">
            <div class="col-12 p-2">

                <label class="small" for="customFile">Choose cover Image</label> <br>
                <input type="file" class="form-control-file border  w-25 rounded small p-1" name="courseCover"
                    id="courseCoverImage">
                <div class="py-3">
                    <div id="toolbar-container"></div>

                    <!-- This container will become the editable. -->
                    <div>


<p class="m-0 small phpQuery"></p>
                 <textarea name="content" id="content" value=""   style="height: 500px;">

                    <?php
                 if(isset($_SESSION['course_id'])){
                                       
                   $query = "SELECT * FROM courseDetail WHERE course_id = '$course_id'";
                   $result = mysqli_query($conn, $query);
                   if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_array($result);
                       $course_image_cover = $row['courseCover'];
                       $show_course_description_html_entity = $row['courseDescription'];
                       $show_course_description = html_entity_decode( $row['courseDescription'] );
                       echo " $show_course_description ";
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
//  ClassicEditor
//      .create( document.querySelector( '#editor' ), {
//         // plugins: [ CKFinder],

// // Enable the "Insert image" button in the toolbar.
         
//          ckfinder: {
//              uploadUrl: '/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
//          },
//         // toolbar: [ 'ckfinder', 'imageUpload', ]
//      } )
//      .catch( function( error ) {
//          console.error( error );
//      } );

var editor = CKEDITOR.replace( 'content' );
CKFinder.setupCKEditor( editor );
</script>
