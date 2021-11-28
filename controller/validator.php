<?php

function isNameValid($name){
    $exp = "/[a-zA-Z0-9]{5,40}/";
    if (!preg_match($exp, $name)){
        echo "Vui lòng nhâp chuỗi từ 5-40 ký tự \n";
    } else {
        return $name;
    }

}

?>
