<?php

require_once 'db_model.php';

// session_start(); 

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // if (!isset($_SESSION['login_attempts'])) {
    //     $_SESSION['login_attempts'] = 0;
    // }

    // if ($_SESSION['login_attempts'] >= 10) {
    //     $_SESSION['login_blocked'] = time() + 30 * 60; 
    // }

    // if (isset($_SESSION['login_blocked']) && $_SESSION['login_blocked'] > time()) {
    //     $message = "Too many failed attempts. Please try again later.";
    // } else {
        if (login($username, $password)) {
            setcookie("user", $username, time() + 3600, "/");
            setcookie("myToken", md5($username . 'myToken'), time() + 3600, "/");
            // unset($_SESSION['login_attempts']); 
            header('Location: person2.php');
        } else {
            $message = "Invalid username or password";
            // $_SESSION['login_attempts']++; 
        }
    // }
}

if (isset($_GET['logout'])) {
    setcookie("user", "", time() - 3600, "/");
    setcookie("myToken", "", time() - 3600, "/");
    // session_destroy();
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


