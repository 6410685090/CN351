<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
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
    </style>
</head>
<body>
    <form action="changePassword.php" method="post">
        <label for="oldPassword">Old Password:</label>
        <input type="password" name="oldPassword" id="oldPassword"><br>
        <label for="newPassword">New Password:</label>
        <input type="password" name="newPassword" id="newPassword"><br>
        <label for="confirmNewPassword">Confirm Password:</label>
        <input type="password" name="confirmNewPassword" id="confirmPassword"><br>
        <input type="hidden" name="changePassword" value="1">
        <input type="submit" value="Change Password">
    </form>
    <?php 
    if (isset($message)){
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>