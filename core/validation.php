<?php
function validateRequired($value,$fieldname){
    return(!empty($value))?null:$fieldname." IS REQURIED!";
}
function validateEmail($email){
    return(filter_var($email,FILTER_VALIDATE_EMAIL))?null:" NOT VALIED EMAIL!";
}
function validatePassword($pass){
    if(strlen($pass<8)){
        return "Password should be more than 8 characters";
    }
    if(!preg_match('/[A-Z]/', $pass)){
        return "Password must contain Uppercase characters";
    }
      if(!preg_match('/[a-z]/',$pass)){
        return "Password must contain Lowercase characters";
    }  if(!preg_match('/[0-9]/',$pass)){
        return "Password must contain Numbers";
    }
}
function validateRegister($name,$email,$phone,$pass){
    $register_arr=[
         'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'pass'=>$pass
    ];
    foreach($register_arr as $fieldname=>$value){
       if( $error=validateRequired($value,$fieldname)){
        return $error;}
         if( $error=validateEmail($email)){
        return $error;} 
        if( $error=validatePassword($pass)){
        return $error;}
    }
}

function validateLogin($email,$pass){
    $login_arr=[
        'email'=>$email,
        'pass'=>$pass


    ];
    foreach($login_arr as $fieldname=>$value){
          if( $error=validateRequired($value,$fieldname)){
        return $error;}


    }
}









?>