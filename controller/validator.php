<?php

function isNameValid($name){
    $exp = "/[a-zA-Z0-9]{5,40}/";
    if (!preg_match($exp, $name)){
        echo "Vui lòng nhâp chuỗi từ 5-40 ký tự \n";
    } else {
        return $name;
    }

}

function isPasswordValid($name){
    $exp = "/[a-zA-Z0-9]{5,40}/";
    if (!preg_match($exp, $name)){
        echo "Vui lòng nhâp chuỗi từ 5-40 ký tự \n";
    } else {
        return $name;
    }

}

function isEmailValid ($email) {
    
    $regex = "/[a-zA-z0-9]@[a-zA-z0-9].[a-zA-z0-9]/i";
    if (preg_match( $regex, $email)) {
    $em = 1;
    } else {
    echo "Email - Vui long nhap < sth >@< sth >.< sth ><br>";
    $em = 0;
    }
};

?>
