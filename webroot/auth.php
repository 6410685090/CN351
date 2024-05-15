<?php

require_once 'db_model.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if (login($username, $password)) {
        setcookie("user", $username, time() + 3600, "/");
        header('Location: person2.php');
    } else {
        $message = "Invalid username or password";
    }

}

if (isset($_GET['logout'])) {
    setcookie("user", "", time() - 3600, "/");
    header('Location: index.php');
}

if (isset($_COOKIE['user'])) {
    header('Location: person2.php');
}

if (isset($_POST['register'])) {
    $username = $_POST['rusername'] ?? '';
    $password = $_POST['rpassword'] ?? '';
    $confirmPassword = $_POST['rconfirmPassword'] ?? '';
    if ($password != $confirmPassword) {
        $message = "Password and confirm password not match";
    }
    if (isRegister($username)) {
        $message = "Username already exists";
    }
    if (!isset($message)) {
        register($username, $password);
        $message = "User registered successfully";
    }
}

require_once 'index.php';