<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <style>
        form {
            width: 350px;
            margin: auto;
            padding-top: 100px;
        }
        
        input {
            padding: 8px 3px;
            width: 80%;
        }
        
        #button {
            width: 40%;
        }
        h2 {
            color:blue;
        }
    </style>
</head>

<body>
    <?php
       /* //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])) {
            //if post is set as the submit method, then echo the code below.
            //I used post so that the input won't show as part of my request url.
            //htmlspecialchars protects my form by converting any form of unwanted characters like < to &lt etc.
            //(int) also protects my code by converting any input to integer.
            echo 'Hi '.htmlspecialchars($_POST['name']).'.'.	'<br>';
            echo 'You are '.(int)$_POST['age'].' years old.'.'<br>';
            echo 'You live in '.htmlspecialchars($_POST['city']).'.';
        }*/
    ?>

    <center>
    <form method="post" action="insert_record.php">
        <h2> Have a question? Write us!</h2>
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email address" required/><br><br>
        <textarea rows="10" cols="33" name="msg" placeholder="Type your message here" required></textarea><br><br>
        <input type="submit" name="submit" id="button" value="SUBMIT">
    </form>
    </center>

</body>

</html>
