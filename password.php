<?php
include __DIR__ . '/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h4>Your password is:</h4>
        <p><?php echo $_SESSION['generated_password']; ?></p>
    </div>
    <form action="reset.php" method="post">
        <button type="submit">Reset</button>
    </form>
</body>

</html>