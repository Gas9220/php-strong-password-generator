<?php
function randomValue($withNum, $withSymb)
{
    $options = [];

    $upper_case = chr(rand(65, 90));
    $lower_case = chr(rand(97, 122));

    array_push($options, $upper_case, $lower_case);

    if ($withNum === 'on') {
        $number = rand(0, 9);
        $options[] = $number;
    }

    if ($withSymb === 'on') {
        $symbols = '~!@#$*%`?[]{};<>?.,_-()';
        $randomSymbol = $symbols[rand(0, strlen($symbols) - 1)];
        $options[] = $randomSymbol;
    }

    return $options[rand(0, count($options) - 1)];
}
function generatePassword($characters, $num, $symb, $repeatChar)
{
    $password = "";
    if (!empty($characters)) {
        while (strlen($password) < $characters) {
            $newChar = randomValue($num, $symb);

            if (!$repeatChar) {
                if (!str_contains($password, $newChar)) {
                    $password .= $newChar;
                }
            } else {
                $password .= $newChar;
            }
        }

        var_dump($password);
        return $password;
    }

    return '';
}
