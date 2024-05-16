<?php

$id = $_GET['id'] ?? 0;
$user = $_COOKIE['user'] ?? '';

require_once 'db_model.php';

if (!checkMyToken($user)) {
    $messageError = "You don't have permission to delete data";
    $persons = get_all_data();
    require_once 'data_view.php';
    exit;
}

if (delete_data($id)) {
    $message = "Data deleted successfully";
    $persons = get_all_data();
    require_once 'data_view.php';
} else {
    $message = "Error deleting data";
}