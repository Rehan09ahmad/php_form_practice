<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <label for="">First Name</label>
   <input type="text" name="firstname" placeholder="Enter Your Name"> <br> <br>
   <label for="">Last Name</label>
   <input type="text" name="lastname" placeholder="Enter Your last name"> <br> <br>
   <input type="submit" name="submit">
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        if(empty($firstname) || (empty($lastname))){
            echo "name is empty";
        }
        else{
            echo "<br>Full name <br>" . $firstname. "" .$lastname;
        }
     }
    ?>
</body>
</html>