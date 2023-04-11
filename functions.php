<?php

$password_length = $_GET["pass-lenght"];

function randomValue() {
    $upper_case = chr(rand(65,90));
    $lower_case = chr(rand(97,122));
    $number = rand(0, 9);
    $symbols= '~!@#$*%`?[]{};<>?.,_-()';
    $randomSymbol = $symbols[rand(0, strlen($symbols)-1)];
    $options = [$upper_case, $lower_case, $number, $randomSymbol];

    return $options[rand(0, count($options) - 1)];
}
function generatePassword($characters) {
    $password = "";

    while (strlen($password) < $characters) {
       $password .= randomValue();
    }

    var_dump($password);
    return $password;
}