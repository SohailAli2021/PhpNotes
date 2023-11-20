

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
        <input type="submit" name="save">

    </form>
    <?php

    // if(isset($_POST['save'])){
    //     echo $_POST['name']."<br>";
    //     echo $_POST['password']."<br>";
    // }







    echo"<pre>";
    print_r($_SERVER);
    echo"</pre>";

    // echo $_SERVER['PHP_SELF'];
    // echo $_SERVER['SERVER_NAME'];

    ?>



</body>
</html>

