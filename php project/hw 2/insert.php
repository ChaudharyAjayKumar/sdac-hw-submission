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
        FULL NAME:
        <input type="text" name="name" id="" />
        <br />
        POSITION:
        <select name="position" id="">
          <option value="ceo">ceo</option>
          <option value="cfo">cfo</option>
          <option value="hr">hr</option>
        </select>
        <br />
        SALARY:
        <input type="text" name="salary" />
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
 $name=$_POST['name'];
 $position=$_POST['position'];
 $sal=$_POST['salary'];

 $sql=$con -> prepare('insert into emp_detail values (?,?,?,?)');
 $sql -> bind_param('issd',$id,$name,$position,$sal);

if  ( $sql->execute()) {
    echo "<br> inserted";
}
else{
    echo "not inserted";
}
}

?>