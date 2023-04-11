<?php

$password_length = $_GET["pass-lenght"];

function randomValue()
{
    $upper_case = chr(rand(65, 90));
    $lower_case = chr(rand(97, 122));
    $number = rand(0, 9);
    $symbols = '~!@#$*%`?[]{};<>?.,_-()';
    $randomSymbol = $symbols[rand(0, strlen($symbols) - 1)];
    $options = [$upper_case, $lower_case, $number, $randomSymbol];

    return $options[rand(0, count($options) - 1)];
}
function generatePassword($characters)
{
    $password = "";

    while (strlen($password) < $characters) {
        $password .= randomValue();
    }

    var_dump($password);
    return $password;
}

$generated_password = generatePassword($password_length);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Password Generator</h3>
        <form action="index.php" method="get">
            <label for="pass-lenght">Lunghezza password:</label>
            <input type="number" name="pass-lenght" placeholder="password characters">
        </form>
    </div>
</body>

</html>