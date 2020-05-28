<?php



function classAutoLoader($class){
    $class = strtolower($class);
    $path = "includes/{$class}.php";
    if(is_file($path) && !class_exists($class)){
        require_once($path);
    }
}

spl_autoload_register('classAutoLoader');


function redirect($loction){
    header("Location: $loction");
}

function generateNewString($len = 10){
    $token = "pOiuZtrEWQasDfGhjklmnBvCxy1234567890";
    $token = str_shuffle($token);
    $token = substr($token, 0, $len);

    return $token;
}