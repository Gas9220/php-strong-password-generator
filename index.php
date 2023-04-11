<?php
require __DIR__ . '/functions.php';
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
        <h4>Your password is:</h4>
        <p><?php echo $generated_password ?></p>
    </div>
</body>

</html>