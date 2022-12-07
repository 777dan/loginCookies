<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <p>Please, input your login</p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="login">
        <input type="submit" name="submit">
    </form>
    <?php include("login.php"); ?>
</body>

</html>