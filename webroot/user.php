<?php

require_once 'db_model.php';

if(checkMyToken($_COOKIE['user'])){
    $users = get_all_user();
    require_once 'user_view.php';
} else {
    $persons = get_all_data();
    $messageError = "you don't have permission to view user data";
    require_once 'data_view.php';
}


