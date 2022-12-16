<?php 
include_once '../models/User.php';

$model = new User;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
                <th>User Id</th>
                <th>Username</th>
                <th>User Email</th>
                <th>User Uid</th>
                <th>User Admin</th>
        </tr>
        <?php foreach($model->getAllUsers() as $key=>$user) : ?>
            <tr>
                <td><?php echo($user->userId);?></td>
                <td><?php echo($user->username);?></td>
                <td><?php echo($user->userEmail);?></td>
                <td><?php echo($user->userUid);?></td>
                <td><?php echo($user->admin);?></td>
                <?php 
                    echo("<td><a href=\"/admin/editUser.php?userId=$user->userId\">Edit</a></td>")
                ?>
            </tr>
         <?php endforeach; ?>
    </table>
</body>
</html>