<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       
        <div class="left">
            <form method="post" action="create.php">
                <h1>Login page</h1>
                <input name="name" type="text" placeholder="Enter your name" required>
                <input name="password" type="password" placeholder="Enter your password" required><br><br>
                <input name="submit" type="submit">
            </form><br><br>

            <h2>User List</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM inputs";
                    $result = mysqli_query($connection, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $password = $row['password'];

                            echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$password</td>
                            </tr>";
                        }
                    }
                    ?>
                </tr>
            </table>
        </div>

        <div class="right">
            <h1>Delete User</h1>
            <form action="delete.php" method="post">
                Enter delete user ID: 
                <input type="text" name="deleteid" required>
                <button name="delete" type="submit">Delete</button>
            </form><br><br>

            <h1>Update User</h1>
            <form action="update.php" method="post">
                Enter update user ID: 
                <input type="text" name="uid" required><br>
                Enter update user name: 
                <input type="text" name="uname" required><br>
                Enter update user password: 
                <input type="text" name="upassword" required><br>
                <button name="update" type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
