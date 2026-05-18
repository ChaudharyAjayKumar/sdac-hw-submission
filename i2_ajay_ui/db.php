<?php
session_start();

$con=new mysqli('localhost','root','','i2_php');
if(!$con){
    echo "not connteced";
}

?>