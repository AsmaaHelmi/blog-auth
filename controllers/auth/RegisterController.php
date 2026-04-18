<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
 $name=trim($_POST['name']);
 $email=trim($_POST['email']);
 $phone=trim($_POST['phone']);
 $pass=trim($_POST['pass']);
 //var_dump($name,$email,$phone,$pass);
 $error=validateRegister($name,$email,$phone,$pass);
 if(!empty($error)){
    setMessage("danger",$error);
    header("Location:index.php?page=sign-in");
    exit;
 }if(register($name,$email,$phone,$pass)){
    setMessage("successful","register done");
    header("Location:index.php");
    exit;

}else {setMessage("danger","register failed");
    header("Location:index.php?page=sign-in");
    exit;}



}















?>