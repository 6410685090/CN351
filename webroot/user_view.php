<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User</title>
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
    </style>
</head>
<body>
    
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'];?></td>
            <td><?= $user['username'];?></td>
            <td><?= $user['password'];?></td>
        </tr>
    <?php endforeach;?>
</table>

</body>
</html>