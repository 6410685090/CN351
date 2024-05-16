<?php

require_once 'db_model.php';

if (isset($_POST['search'])) {
    $name = $_POST['name'] ?? '';
    $persons = search_data($name);
    require_once 'data_view.php';
    exit;   
}