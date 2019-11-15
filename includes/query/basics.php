
<?php

include '../connection.php';

// ///////////////////////////////////// Newzletter Query ///////////////////////

    if (isset($_POST['email'])) {

            $email = $_POST['email'];
            date_default_timezone_set('Asia/Kolkata');
            $date = date("d/m/y | h:i:s");
             $searchQuery = "SELECT email FROM newzletter WHERE email = '$email'";
             $searchResult = mysqli_query($conn, $searchQuery);

             if(mysqli_num_rows($searchResult)  > 0){
                
                echo " Email Already Exists";
             
            }

            else{
               
                $query =  "INSERT INTO newzletter ( `date`, `email`) VALUES ('$date' , '$email')";
                $result = mysqli_query($conn, $query) ;
                if( $result){
                    echo "1";
                }

                else {
                    echo "Error ".mysqli_error($conn).$date;
                }


            }
          

    }



    // /////////////////////// Message Query /////////////////////////
    if (isset($_POST['queryName']) || isset($_POST['queryPhone']) || isset($_POST['queryEmail']) || isset($_POST['querySubject']) ||  isset($_POST['queryMessage'])) {

    //    $name = $_POST['queryName'];
    //    $phone = $_POST['queryPhone'];
    //    $email = $_POST['queryEmail'];
    //    $subject = $_POST['querySubject'];
    //    $message = $_POST['queryMessage'];
       echo("the data is ") ;

    //    $query = "INSERT INTO `message` ( `name`, `phone`, `email`, `subject`, `message`) VALUES ( '$name', '$phone', '$email', '$subject', '$message')";
    //    $result = mysqli_query($conn, $query);

    //    if ($result) {
    //        # code...
    //        echo "Thank You !  ";
    //    }

    //    else {
    //        echo "Error ".mysqli_error($conn);
    //    }
    }

?>