<?php 
if (!isset($_COOKIE['user'])){
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table , th , td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: .5em;
            margin: auto;
        }
        .text-center{
            text-align: center;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form{
            margin-bottom: 1em;
        }
        #name{
            width: 670px;
        }
    </style>
</head>
<body>
<h1 class="text-center">Persons Table</h1>
<?php
    if (isset($message)){
        echo "<p class='text-center'>$message</p>";
    }
    if (isset($messageError)){
        echo "<p class='text-center' style='color:red;'>$messageError</p>";
    }
?>
<p class="text-center">
    <a href="person2.php">Home</a> |
    <a href="person_form.php">Add new person</a> |    
    <a href="chPass.php">Change password</a> |
    <?php 
        if ($_COOKIE['user'] == 'admin'){
            echo "<a href='user.php'>All User</a> |";
        }
    ?>
    <a href="auth.php?logout=true">Logout</a><br>
    
</p>

<form action="search.php" method="post">
    <input type="text" id="name" placeholder="Search" name="name">
    <input type="hidden" name="search" value="1">
    <input type="submit">
</form>


<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <?php 
            if ($_COOKIE['user'] == 'admin'){
                echo "<th>Delete</th>";
            }
        ?>
    </tr>
    <?php foreach ($persons as $person): ?>
        <tr>
            <td><?= $person['id'];?></td>
            <td><?= $person['name'];?> <?= $person['surname']?></td>
            <td><?= $person['email'];?></td>
            <td><?= $person['phone'];?></td>
            <td><?= $person['address'];?></td>
            <?php 
                if ($_COOKIE['user'] == 'admin'){
                    echo "<td><a href='delete.php?id={$person['id']}'>Delete</a></td>";
                }
            ?>
        </tr>
    <?php endforeach;?>
</table>

</body>
</html>