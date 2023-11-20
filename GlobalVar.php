<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="Post">
        Name:<input type="text" name="name"><br>
        <br>
        Password:<input type="password" name="password">
        <br>
        <input type="submit" name="Submit">

    </form>
   
    <?php
   if($_SERVER['REQUEST_METHOD']== 'POST'){
    echo $_POST['name'];
    echo $_POST['password'];
   }

    ?>
</body>
</html>