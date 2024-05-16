<?php

require_once 'db_model.php';

if (isset($_POST['changePassword'])) {
    $oldPassword = $_POST['oldPassword'] ?? '';
    $newPassword = $_POST['newPassword'] ?? '';
    $confirmNewPassword = $_POST['confirmNewPassword'] ?? '';
    $user = $_COOKIE['user'];
    if (!checkMyToken($user)) {
        $messageError = "Invalid request";
    }
    if (!login($_COOKIE['user'], $oldPassword)) {
        $messageError = "Invalid old password";
    }
    if ($newPassword != $confirmNewPassword) {
        $messageError = "New password and confirm password not match";
    }
    if (!isset($messageError)) {
        $newPassword = md5($newPassword);
        changePassword($_COOKIE['user'], $newPassword);
        $message = "Password changed successfully";
    }
}  

$persons = get_all_data();
require_once 'data_view.php';