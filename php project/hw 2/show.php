<?php 
include 'db.php';
$result=$con->query('select * from emp_detail');
?>

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
    <!-- <div class="con">
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
    </div> -->
  <div class="con2">
    <table border=1>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>POSITION</td>
            <td>SALARY</td>
        </tr>
       <?php  while($row =$result ->fetch_assoc()){?>
       <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['position'] ?></td>
        <td><?php echo $row['salary'] ?></td>
       </tr>
       <?php }?>
    </table>
  </div>  
</body>
</html>
