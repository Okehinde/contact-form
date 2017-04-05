<!DOCTYPE html>
<html>

<head>
    
    <style>
              
        #button {
            width: 10%;
        }
    </style>
</head>

<body>

<?php

include 'config.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$msg = htmlspecialchars($_POST['msg']);


if ($name && $email && $msg) {
            if (!$connection) {
                die("Could not connect to database!");
            }
            $username = mysqli_query($connection, "SELECT name FROM details_table WHERE name='$name'");
            $count = mysqli_num_rows($username);
            $remail = mysqli_query($connection, "SELECT email FROM details_table WHERE email='$email'");
            $checkmail = mysqli_num_rows($remail);

            if ($checkmail != 0) {
                echo "Email is not Available!";
            } else {
                if ($count != 0) {
                    echo "This User has already been registerd!";
                } else {
                    mysqli_query($connection, "INSERT INTO details_table(name,email,msg) VALUES ('$name','$email','$msg')");

                    //$registered = mysqli_affected_rows();

                    echo "Message sent!";
                }
            }
        } 
    else {
    echo "You have to complete the form!";
}

mysqli_close($connection);

?>

<br><br>
<form method="post" action="get_msgs.php">
 <input type="submit" name="ok" id="button" value="View Messages">   
</form>



</body>

</html>