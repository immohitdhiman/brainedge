<?php
session_start();
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

</head>

<body class="">
    <div class=" row p-0 m-0 h-100">
        <div class=" col-2 h-100 p-2 bg-light border-right ">
            <!-- <div class=" h-25 ">
           

        </div>  -->
            <div>
                <ul class=" p-2" style="list-style-type:none ;">
                    <li class=" p-2 menu-li"><a href="?page=profile"> <i class="icofont-user-alt-3 mr-3"></i> Profile
                        </a> </li>
                    <li class=" p-2 menu-li"><a href="?page=admission"> <i class="icofont-list mr-3"></i> Admission </a>
                    </li>
                    <li class=" p-2 menu-li"> <a href="?page=study_abroad"><i class="icofont-ui-flight mr-3"></i> Study
                            Abroad </a></li>
                    <li class=" p-2 menu-li"> <a href="?page=results"><i class="icofont-image mr-3"></i> Results </a>
                    </li>
                    <li class=" p-2 menu-li"> <a href="?page=faq"><i class="icofont-support-faq mr-3"></i> FAQ </a></li>
                    <!-- <li class=" p-2 menu-li"> <a href="?page=contact"><i class="icofont-contact-add mr-3"></i> Contact </a></li> -->
                    <li class=" p-2 menu-li"> <a href="?page=message"><i class="icofont-ui-message mr-3"></i> Messages
                        </a></li>
                    <li class=" p-2 menu-li"> <a href="?page=newsletter"><i class="icofont-newspaper mr-3"></i>
                            Newsletters </a></li>

                </ul>
            </div>

        </div>

        <div class="  p-0 m-0 col-10 h-100" style=" overflow-y:auto;">
            <div class=" row p-2 py-3 m-0 nav navbar bg-white sticky-top   ">
                <div class=" col-4">
                    <p class=" p-0 m-0 text-black-50"><strong>Welcome!</strong><?php echo $sessionName ?> </p>
                </div>
                <div class=" col-4">

                </div>
                <div class=" col-4 text-right">
                    <a href="logout.php" id="logout-dashboard" class="text-danger font-weight-bold"><i
                            class="icofont-ui-power"></i> Logout</a>
                </div>
            </div>



            <!-- View -->
            <div class=" w-100" id="main-container">

            </div>
            <!--  End of view -->


        </div>
    </div>
   


<?php
$pageValue = $_GET['page'];
echo "<input type='hidden' id='pageValue' value='$pageValue'> "

?>




<script src="../js/master.js"></script>
<script src="./routs.js"></script>

</body>

</html>


<?php

include './includes/dashboardQuery.php';
if(isset($_GET['addCourseID']) || isset($_GET['addCourseName'])){
    $addCourseName = $_GET['addCourseName'];
    $addCourseID = $_GET['addCourseID'];
    echo "<input type='hidden' value='$addCourseID' id='addCourseID' > 
            <input type='hidden' value='$addCourseName' id='addCourseName' >";
     
 }


?>