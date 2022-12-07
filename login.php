<?php
if (isset($_GET['submit'])) {
    $login = $_GET['login'];
    setcookie("inputLogin[1]", $login, time() + 3600);
    setcookie("inputLogin[2]", time(), time() + 3600);
    echo "Login: " . $_COOKIE['inputLogin'][1]. "<br>";
    echo "Last entry time: " . $_COOKIE['inputLogin'][2] . " s";
    // setcookie("inputLogin", $login, time() + 3600);
    ob_end_flush();
}
