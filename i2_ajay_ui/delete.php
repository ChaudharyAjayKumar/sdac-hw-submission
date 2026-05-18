<?php
include 'db.php';


if($_SERVER['REQUEST_METHOD']==='GET'){
   $bid=$_GET['bid'];

   $sql =$con -> prepare('delete from book where bid =?');
   $sql -> bind_param('i',$bid);

   if ($sql -> execute()) {
       header('location:home.php');
       echo "<script>alert('deleted')</script>";
   }
   else{
    header('location:home.php');
     echo "<script>alert('not deleted')</script>";
   }






}

?>