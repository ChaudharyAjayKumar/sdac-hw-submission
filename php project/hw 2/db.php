<?php 

$servername='localhost';
$username='root';
$password='';
$dbname='i2_php';

$con=new mysqli($servername,$username,$password,$dbname);
if (!$con) {
    echo 'not connected';
}
else {
    echo 'connected';
}


?>