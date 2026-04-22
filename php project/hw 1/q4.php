<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name:
        <input type="text" name="name" id=""><br>
        password:
        <input type="password" name="password" id=""><br>
        agree to term and codition ?:
        <input type="checkbox" name="agree" value="yes" id="">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $agree=isset($_POST['agree'])?"agree":"not agree";

    echo "welcome, {$name}.you had {$agree} to the terms and conditions.";
}


?>