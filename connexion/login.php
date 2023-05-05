<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    if ($login == "admin" && $password == "admin") {
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('Location: admin.php');
    } else {
        echo "Mauvais login ou mot de passe";
    }
}