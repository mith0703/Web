<?php

function isNameValid($name){
    $exp = "/[a-zA-Z0-9]{5,40}/";
    if (!preg_match($exp, $name)){
        return true;
    } else {
        return false;
    }

}

function isPasswordValid($name){
    $exp = "/[a-zA-Z0-9]{5,40}/";
    if (!preg_match($exp, $name)){
    } else {
        return $name;
    }

}

function isEmailValid ($email) {
    
    $regex = "/[a-zA-z0-9]@[a-zA-z0-9].[a-zA-z0-9]/i";
    if (preg_match( $regex, $email)) {
    $em = 1;
    } else {
    $em = 0;
    }
};

?>
