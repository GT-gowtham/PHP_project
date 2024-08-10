<?php
include 'connection.php';

if (isset($_POST['update'])) {
    $id = $_POST['uid'];
    $name = $_POST['uname'];
    $password = $_POST['upassword'];

    $sql = "UPDATE inputs SET name='$name', password='$password' WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "<script>alert('Username updated & password successfully!');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}
?>
