<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $username = $_POST['userid'];
    $password = $_POST['password'];


    $stmt = $connection->prepare("SELECT * FROM inputs WHERE name = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count == 1) {
        header('Location: index.php');
    } else {
        echo '<script>
            window.location.href = "login.html";
            alert("Login failed. Invalid username or password!!");
            </script>';
    }

    $stmt->close();
    $connection->close();
}
?>
