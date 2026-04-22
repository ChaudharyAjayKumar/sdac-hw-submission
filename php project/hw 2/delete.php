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
      form {
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
        ID:
        <input type="text" name="id" />
        <br />
        <button type="submit">submit</button>
      </form>
    </div>
  </body>
</html>



<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $id=$_POST['id'];

 $sql=$con -> prepare('delete from emp_detail where id =?');
 $sql -> bind_param('i',$id);

if  ( $sql->execute()) {
    echo "<br> deleted";
}
else{
    echo "not deleted";
}
}

?>