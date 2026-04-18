<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
   $email=$_POST['email'];
   $pass=trim($_POST['pass']);
   $error=validateLogin($email,$pass);
if(!empty($error)){
   setMessage("danger",$error);
   header("Location:index.php?page=login");
   exit;
}
if(Login($email,$pass)){
    setMessage("success","user login successfully");
    header("Location:index.php");
    exit;

}else {
    setMessage("danger","login failed");
    header("Location:index.php?page=login");
    exit;}

}



  


 















?>