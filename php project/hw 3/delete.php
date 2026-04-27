<?php
include 'db.php';
if(isset($_GET['id'])){
$id=$_GET['id'];
$result=$con ->prepare('delete from  project where id=?');
$result->bind_param('i',$id);
if ($result->execute()) {
    header('location:home.php');
}

}
else {
    echo "no id";
}

?>


