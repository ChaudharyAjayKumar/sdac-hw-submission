<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       ID:
       <input type="text" name="id" id=""> <br>
       NAME:
       <input type="text" name="name" id=""><br>
       SALARY:
       <input type="text" name="salary" id=""><br>
       <button type="submit">submit</button>
    </form>
</body>
</html>


<?php 
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sal=$_POST['salary'];

    $sql=$con -> prepare('insert into emp values (?,?,?)');
    $sql -> bind_param('isd',$id,$name,$sal);

    if($sql -> execute()){
        echo "<br> inserted";
    }
    else {
        echo "not inserted";
    }

}

?>