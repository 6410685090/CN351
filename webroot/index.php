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
</head>
<body>
    <form action="auth.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="hidden" name="login" value="1">
        <input type="submit" value="Login">
    </form>
    <br>
    <form action="auth.php" method="post">
        <label for="rusername">Username:</label>
        <input type="text" name="rusername" id="username">
        <label for="rpassword">Password:</label>
        <input type="password" name="rpassword" id="password">
        <label for="rconfirmPassword">Confirm Password:</label>
        <input type="password" name="rconfirmPassword" id="confirmPassword">
        <input type="hidden" name="register" value="1">
        <input type="submit" value="Register">
    </form>
    <?php 
    if (isset($message)){
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
