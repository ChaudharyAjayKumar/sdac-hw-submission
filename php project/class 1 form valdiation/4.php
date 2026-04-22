<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
       
        email:
        <input type="email" name="email" id=""> <br>
         password:
        <input type="password" name="pass" id=""> <br>
         are u subscribed ?:
        <input type="checkbox" name="subscribe" value="yes" id=""><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD']==='GET'){
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    $subsribe=isset($_GET['subscribe']) ?"subscribed" :" not subscribed";

    echo "thank u for signing up,{$email} .you had {$subsribe}  to the newsletter";

}
?>
