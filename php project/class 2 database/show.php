<?php 
include 'db.php';
$result= $con -> query('select * from emp');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>SALARY</td>
        </tr>
        <?php  while ($row =$result -> fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['sal'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>