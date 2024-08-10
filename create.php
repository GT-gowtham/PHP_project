<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $password= $_POST['password'];

    $sql = "INSERT INTO inputs(name, password) values('$name','$password')";
    $result= Mysqli_query($connection,$sql);
    if($result){
        $last_id = mysqli_insert_id($connection);
        echo "<script>alert('Username created successfully! ID: " . $last_id . "');
         window.location.href = 'index.php';
         </script>";
        //echo "password created successfully <br> <a href= 'index.php'>back</a> ";
        //Header('location:index.php');
    }
    else {
        echo "error" .mysqli_error($connection);
    }

}

?>