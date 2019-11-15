<?php
include '../includes/connection.php';
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    # code...
    header ('location : /dashboard.php');
    exit;
}
if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)  > 0){
            session_start();
            $sessionName = $_SESSION["name"] = $username;
            header('Location: dashboard.php?page=profile');    
    }
    else{
        echo "login faield";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brainedgeindia.com  |  Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/icofont.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<body>

    <div class=" bg-light min-h-100">
        <div class="h-100 d-flex justify-content-center">
            <div class=" h-100 d-flex flex-wrap align-content-center">
                
 <form action="" method="post" class=" p-4 rounded shadow-lg border " style="width: 300px;">

                
                 <img src="../images/logo-01.svg" class=" w-50" alt="">
                 <hr>
                 <div class="loginError alert alert-danger small p-2 rounded-0 d-none" role="alert">
  Opps ! Something went Wrong
</div>

                 <label for="username">Username</label>
                  <input type="text" name="username" id="username" class=" form-control form-control-sm "> 
                  <p class="error  username-error text-danger blockquote-footer"></p>
                  <label for="password ">Password</label>
                  <input type="password" name="password" id="password" class=" form-control form-control-sm ">
                  <p class="error  password-error text-danger blockquote-footer"></p>
                <button type=""  onclick=" return chkLogin()" name="submit"  class=" btn btn-primary btn-sm btn-block mt-3">Login</button>

                
            </form>
            </div>

           
        </div>

    </div>
    


        <script src="../js/master.js"></script>
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>