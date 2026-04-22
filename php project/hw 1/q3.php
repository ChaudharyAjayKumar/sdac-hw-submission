<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name:
        <input type="text" name="name" id=""><br>
        phone number:
        <input type="text" name="phone" id=""><br>
        car brand:
        <select name="brand" id="">
            <option value="toyata">toyata</option>
            <option value="ford">ford</option>
            <option value="tesla">tesla</option>
        </select>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $car=$_POST['brand'];

    echo "hello, {$name}. your phone number is {$phone} and your preferred car brand is {$car}.";
}


?>