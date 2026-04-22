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
    $sal=$_POST['salary'];

    $sql=$con -> prepare('update emp set sal=? where id=?');
    $sql -> bind_param('di',$sal,$id);

    if($sql -> execute()){
        echo "<br> updated";
    }
    else {
        echo "not updated";
    }

}

?>