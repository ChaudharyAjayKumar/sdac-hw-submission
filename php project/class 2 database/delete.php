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
       <button type="submit">submit</button>
    </form>
</body>
</html>


<?php 
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];


    $sql=$con -> prepare('delete from emp where id =?');
    $sql -> bind_param('i',$id);

    if($sql -> execute()){
        echo "<br> deleted";
    }
    else {
        echo "not deleted";
    }

}

?>