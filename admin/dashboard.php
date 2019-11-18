<?php
session_start();
if (isset($_GET['page']) && isset($_GET['addCourseID'])) {
    $course_id = $_GET['addCourseID'];
    $course_name = $_GET['addCourseName'];
    
}
include '../includes/connection.php';
$sessionName = $_SESSION['name'];
if ($sessionName == '') {
    header('Location: index.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/icofont.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    
   <!-- <script src="./ckeditor.js"></script> -->
   <script src="./ckfinder/ckfinder.js"></script>
   <script src="./ckeditor/ckeditor.js"></script>

</head>
<!-- ckeditor\ckeditor.js -->

<body class="" style="overflow:hidden;">
    <div class=" row p-0 m-0 h-100 " style="overflow:hidden;">
        <div class=" col-2 h-100 p-0  bg-dark ">
            <!-- <div class=" h-25 ">
           

        </div>  -->

        <div class="p-3  bg-primary">
        <p class=" p-0 m-0 text-white"><strong>DASHBOARD</strong> </p>
        </div>
            <div class="w-100"> 
                <ul class="p-1 m-0 " style="  list-style-type:none ;">
                    <li class="  menu-li"><a href="?page=profile" class="text-white"> <i class="icofont-user-alt-3 mr-3"></i> <span class="small">  Profile </small>
                        </a> </li>
                    <li class="  menu-li"><a href="?page=admission" class="text-white"> <i class="icofont-list mr-3"></i> <span class="small">  Admission </small> </a>
                    </li>
                    <li class="  menu-li"> <a href="?page=study_abroad" class="text-white"><i class="icofont-ui-flight mr-3"></i> <span class="small">  Study </small>
                            Abroad </a></li>
                    <li class="  menu-li"> <a href="?page=results" class="text-white"><i class="icofont-image mr-3"></i> <span class="small">  Results  </small></a>
                    </li>
                    <li class="  menu-li"> <a href="?page=faq" class="text-white"><i class="icofont-support-faq mr-3"></i> <span class="small">  FAQ  </small></a></li>
                    <!-- <li class=" p-2 menu-li"> <a href="?page=contact"><i class="icofont-contact-add mr-3"></i> Contact </a></li> -->
                    <li class=" menu-li"> <a href="?page=message" class="text-white"><i class="icofont-ui-message mr-3"></i> <span class="small">  Messages </small>
                        </a></li>
                    <li class="  menu-li"> <a href="?page=newsletter" class="text-white"><i class="icofont-newspaper mr-3"></i>
                          <span class="small">  Newsletters </small></a></li>

                </ul>
            </div>

        </div>

        <div class="  p-0 m-0 bg-light col-10 h-100" style=" overflow-y:auto;">
            <div class=" row p-2 py-3 m-0 nav navbar bg-primary sticky-top   ">
                <div class=" col-4">
                   
                </div>
                <div class=" col-4">

                </div>
                <div class=" col-4 text-right">
                <div class="dropdown open">
                <div class="dropdown">
  <button class="btn btn-sm text-white btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="icofont-user-alt-3 mr-1"></i>  <?php  echo $sessionName; ?>
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
    <!-- <a class="dropdown-item" href="#!">Profile</a> -->
    <a class="dropdown-item" href="logout.php"><i class="icofont-power mr-1 font-weight-bold text-primary"></i> Logout</a>
  </div>
</div>

</div>

                    <!-- <a href="logout.php" id="logout-dashboard" class="text-danger font-weight-bold"><i
                            class="icofont-ui-power"></i> Logout</a> -->
                </div>
            </div>
            <div class="p-3">
<div class="border bg-white w-100 shadow" id="main-container" >
<?php
if (isset($_GET['page'])) {
    # code...
    $page = $_GET['page'];
    $include_query =   glob("./$page.php");
    if ($include_query == true) {
        include './'.$page.'.php';
    }
    else{
        include './profile.php';
    }
        # code...
    }




?>
            </div>
            </div>



            <!-- View -->
            
            <!--  End of view -->


        </div>
    </div>
   


<?php
// $pageValue = $_GET['page'];
// echo "<input type='hidden' id='pageValue' value='$pageValue'> "

?>



<script>
$(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script src="../js/master.js"></script>
<script src="./routs.js"></script>


</body>

</html>


<?php

include './includes/dashboardQuery.php';


 
?>