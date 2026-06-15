<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="firstname" placeholder="enter your name"> <br>
    <br>
    <input type="text" name="lastname" placeholder="enter your last name"> <br> <br>

    <input type="submit" name="submit">

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
            if(empty($firstname)){
                echo "name is empty";
            }else
            {
                echo " <br> full name <br> " . $firstname . " " . $lastname;
            }
        }
    
    ?>
    </form> 
</body>
</html>