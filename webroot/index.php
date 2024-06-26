<?php 
if (isset($_COOKIE['user'])){
    header('Location: person2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label,input{
            display: block;
            margin-top: .3em;
        }
        a{
            text-decoration: none;
            color: black;
            padding: 7px 8px;
            border-radius: 5px;
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="auth.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="hidden" name="login" value="1">
        <input type="submit" value="Login">
    </form>
    <p>
    <a href="register.php">Register</a>
    </p>
    <?php 
    if (isset($message)){
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>