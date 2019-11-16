<?php
session_start();
// include '../../includes/connection.php';
$sessionID =  $_SESSION['courseID'];

if ($sessionID == '') {
    header('Location: ?page=admission');
}

else{
    echo $sessionID;
}


?>