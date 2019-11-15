<?php
include('../includes/connection.php');
session_start();


$query = "SELECT * FROM `message`";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    # code...

       



?>



<div class="col-12 p-4">
    <table class=" table table-hover">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Email
                </th>
                <th>
                    Subject
                </th>
                <th>
                    Message
                </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($row = mysqli_fetch_array($result)) {

                $id = $row['id'];
                $name = $row['name'];
                $phone = $row['phone'];
                $email = $row['email'];
                $subject = $row['subject'];
                $message = $row['message'];

            ?>
            <tr>

            <?php

            ?>
                <td>
                    <?php  echo $id; ?>
                </td>
                <td>
                        <?php  echo $name; ?>
                </td>
                <td>
                        <?php  echo $phone; ?>
                </td>
                <td>
                        <?php  echo $email; ?>
                </td>
                <td>
                        <?php  echo $subject; ?>
                </td>
                <td>
                        <?php  echo $message; ?>
                </td>
                <td>
                    <?php
                    echo  "<button id='$id' class='messageDelete btn btn-danger  btn-sm' onClick='deleteMessage()'>Delete</button>";
                     ?>
                </td>
            </tr>
            <?php
                    }
                    }
                    else{
                        echo "data fatch Error" .mysqli_error($conn);
                    }
                    
            ?>                   
        </tbody>

        <script>

            function deleteMessage() { 
                var messageID = $('this .messageDelete').attr('id');
                alert(messageID);
             }
        </script>
    </table>

</div>

