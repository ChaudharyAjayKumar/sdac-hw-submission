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
         age:
        <input type="number" name="age" id=""> <br>
         select gender:
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
            <option value="other">other</option>
        </select> <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    echo "hello, {$name} .you are {$age} year old and identify as {$gender}.";

}

?>