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
    $query = "SELECT password FROM users WHERE username = '$username' ";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $hashpassword = mysqli_fetch_all($result,MYSQLI_ASSOC);
    if (empty($hashpassword)){
        return false;
    }
    $hashpassword = $hashpassword[0]['password'];
    if ($hashpassword == md5($password)){
        return true;
    }
    return false;
}

function getUser($username){
    global $link;
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $user;
}

function register($username, $password){
    $password = md5($password);
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

function changePassword($username, $password){
    global $link;
    $query = "UPDATE users SET password = '$password' WHERE username = '$username'";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
}

function get_all_data (){
    global $link;
    $query = 'SELECT *  FROM persons ORDER BY id DESC;';
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $persons = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $persons;
}

function get_all_user(){
    global $link;
    $query = 'SELECT * FROM users ORDER BY id DESC;';
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $user;

}

function insert_data($name, $surname, $email, $phone , $address){
    global $link;
    $query = "INSERT INTO persons (name, surname, email, phone , address) 
              VALUES('$name','$surname','$email','$phone','$address')";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    return $result; //return True/False
}

function insert_data_secure($name, $surname, $email, $phone , $address){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "INSERT INTO persons (name, surname, email, phone , address) 
              VALUES (?,?,?,?,?)";
    mysqli_stmt_prepare($stmt,$query);

    mysqli_stmt_bind_param($stmt, 'ssss', $name,$surname,$email,$phone,$address);

    return mysqli_stmt_execute($stmt); //return True/False
}

function getDataHack($data){
    global $link;
    $query = "INSERT INTO testDB (data) VALUES ('$data')";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    return $result; //return True/False
}

function delete_data($id){
    global $link;
    $query = "DELETE FROM persons WHERE id = $id";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    return $result; //return True/False
}

function search_data($name){
    global $link;
    $query = "SELECT * FROM persons WHERE name LIKE '%$name%'";
    $result = mysqli_query($link,$query);
    if (!$result){
        die('Query failed: '. mysqli_error($link));
    }
    $persons = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $persons;

}

function serch_data_secure($name){
    global $link;
    $stmt = mysqli_stmt_init($link);
    $query = "SELECT * FROM persons WHERE name LIKE ?";
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt, 's', $name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $persons = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $persons;
}

function checkMyToken($username)
{
    return md5($username.'myToken') == $_COOKIE['myToken'];
}



