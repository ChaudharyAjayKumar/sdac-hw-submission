<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       
        name:
        <input type="text" name="name" id=""> <br>
         email:
        <input type="text" name="email" id=""> <br>
          password:
        <input type="password" name="pass" id=""> <br>
         confirm password:
        <input type="password" name="cpass" id=""> <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $name =$_POST['name'];
    $pass=$_POST['pass'];
   $cpass=$_POST['cpass'];


   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('enter valid format !!')</script>";
    }


  if($pass != $cpass){
        echo "<script>alert('password not match !!')</script>";
    }

    if(empty($name) && empty($email) && empty($pass)){
        echo "<script>alert('all field required !!')</script>";
    }

}

?>


