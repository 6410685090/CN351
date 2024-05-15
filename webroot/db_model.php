<?php
$server = 'mariadb';
$username = 'root';
$password = 'secret';
$database = 'my_db';

function db_connect($server,$username,$password,$database)
{
    $link = mysqli_connect($server,$username,$password,$database);
    if (! $link){
        die("Connection failed: ". mysqli_connect_error());
    }
    return $link;
}

$link = db_connect($server,$username,$password,$database);


function login($username , $password){
    global $link;
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
    if (!empty($user)) {
        return true;
    }
    return false;
}

function register($username, $password){
    global $link;
    $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
}

function isRegister($username){
    global $link;
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
    if (!empty($user)){
        return true;
    }
    return false;
}

// function getUserRole($username){
//     global $link;
//     $query = "SELECT role FROM users WHERE username = '$username'";
//     $result = mysqli_query($link,$query);
//     $role = mysqli_fetch_all($result,MYSQLI_ASSOC);
//     return $role;
// }

function get_all_data (){
    global $link;
    $query = 'SELECT * FROM persons ORDER BY id DESC;';
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $persons = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $persons;
}

function insert_data($name, $surname, $email, $phone){
    global $link;
    $query = "INSERT INTO persons (name, surname, email, phone) 
              VALUES('$name','$surname','$email','$phone')";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    return $result; //return True/False
}

function insert_data_secure($name, $surname, $email, $phone){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO persons (name, surname, email, phone) 
              VALUES (?,?,?,?)";
    mysqli_stmt_prepare($stmt,$query);

    mysqli_stmt_bind_param($stmt, 'ssss', $name,$surname,$email,$phone);

    return mysqli_stmt_execute($stmt); //return True/False
}





