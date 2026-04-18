<?php
session_start();
function setMessage($type,$msg){
    $_SESSION['msg']=[
        'type'=>$type,
        'text'=>$msg
    ];
}
function showMessage(){
    if(isset($_SESSION['msg'])){
        $type=$_SESSION['msg']['type'];
        $text=$_SESSION['msg']['text'];
           echo "<div class='alert alert-$type'>$text</div>";

        unset($_SESSION['msg']);
 
   

    }
}


function Register($name,$email,$phone,$pass){
    $conn=$GLOBALS['conn'];
    $hash_pass=password_hash($pass,PASSWORD_DEFAULT);
    $sql="INSERT INTO users(`name`,`email`,`phone`,`password`) VALUES('$name','$email','$phone','$hash_pass')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['user']=[
            "name"=>$name,
            "email"=>$email
        ];
        return true;
    }else{
        return false;
    }
 
}
 //----------login
 
 function Login($email,$pass){
    $conn=$GLOBALS['conn'];
    $sql="SELECT * FROM users WHERE email='$email'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) ==0){
        return false;
     }
   $user= mysqli_fetch_assoc($res);
//  var_dump($user['password']);
// exit;
   if(password_verify($pass,$user['password'])){
    $_SESSION['user']=[
        "name"=>$user['name'],      
        "email"=>$email,
    ];
    return true;
   }
   else{
    return false;
   }
  


   
        
        }




    
  
  
  







?>