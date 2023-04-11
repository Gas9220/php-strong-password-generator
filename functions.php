<?php
function randomValue($withNum, $withSymb) {
    $options = [];

    $upper_case = chr(rand(65, 90));
    $lower_case = chr(rand(97, 122));
    $options[] = $upper_case;
    $options[] = $lower_case;

    if ($withNum === 'on') {
        $number = rand(0, 9);
        $options[] = $number;
    }

    if ($withSymb === 'on') {
        $symbols = '~!@#$*%`?[]{};<>?.,_-()';
        $randomSymbol = $symbols[rand(0, strlen($symbols) - 1)];
        $options[] = $randomSymbol;
    }

    var_dump($options);

    return $options[rand(0, count($options) - 1)];
}
function generatePassword($characters, $num, $symb) {
    $password = "";

    while (strlen($password) < $characters) {
        $password .= randomValue($num, $symb);
    }

    var_dump($password);
    return $password;
}
