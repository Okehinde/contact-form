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

$messages = mysqli_query($connection, "SELECT * FROM details_table");

if (mysqli_num_rows($messages) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($messages)) {
        echo "id: " . $row["id"]. " - Message: ".$row["msg"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($connection);

?>

<br><br>
<form method="post" action="index.php">
 <input type="submit" name="ok" id="button" value="OK">   
</form>



</body>

</html>