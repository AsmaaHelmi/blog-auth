<?php

try{
    $conn=mysqli_connect("localhost","root","","blog");

}catch(Exception $ex){
    header("Location:views/maintainance.php");
    exit;
}








?>