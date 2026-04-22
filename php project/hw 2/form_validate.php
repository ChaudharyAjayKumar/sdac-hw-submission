<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        padding: 0;
        margin: 0;
      }
      table {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* border-radius: 10px;
        border: 2px red dotted;
        box-shadow: 8px 8px 32px red;*/
      }
    </style>
  </head>
  <body>
    <div class="con">
      <form action="" method="post">
        <h1>employee detail</h1>
        FULL NAME:
        <input type="text" name="name" id="" />
        <br />
        EMAIL:
        <input type="text" name="email" />
        <br />

        PASSWORD:
        <input type="text" name="pass" />
        <br />
        CONFIRM PASSWORD:
        <input type="text" name="cpass" />
        <br />
        JOB TITLE:
        <input type="text" name="title" />
        <br />
        <button type="submit">submit</button>
      </form>
    </div>
  </body>
</html>


<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD']==='POST') {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $cpass=$_POST['cpass'];
   $title=$_POST['title'];

   if (empty($name) && empty($email) && empty($pass) && empty($title)) {
    echo  "<script>alert('enter required field')</script> ";
   }

    if ($pass != $cpass) {
         echo  "<script>alert('entered password not match')</script> ";

   }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo  "<script>alert('enter valid email format')</script> ";
    
   }

$sql=$con -> prepare('insert into users2(name, email, password, title) values (?,?,?,?)');
$sql -> bind_param('ssss',$name,$email,$pass,$title);

if  ( $sql->execute()) {
    echo "<br> inserted";
}
else{
    echo "not inserted";
}


$sql->close();

}

?>