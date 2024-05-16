<?php

require_once 'db_model.php';

if (isset($_POST['insert'])) {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    if (insert_data($name, $surname, $email, $phone, $address)){
        $message = "Data inserted successfully";
    } else{
        $error = "Error inserting data";
    }
}


$persons = get_all_data();
require_once 'data_view.php';

