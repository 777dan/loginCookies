<?php
if (isset($_GET['submit'])) {
    $login = $_GET['login'];
    setcookie("inputLogin[1]", $login, time() + 3600);
    setcookie("inputLogin[2]", time(), time() + 3600);
    // setcookie("inputLogin", $login, time() + 3600);
    header('Location: hello.php');
    ob_end_flush();
}
