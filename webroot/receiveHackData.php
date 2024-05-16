<?php

require_once 'db_model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['key1'])) {
        $key1Value = $data['key1'];
        getDataHack($key1Value);
    } else {
        echo "Error: No 'key1' found in data";
    }
} else {
    echo "Error: This script expects a POST request";
}
