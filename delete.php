<?php 
include 'connection.php';

if(isset($_POST['delete'])){
$id=$_POST['deleteid'];

$sql="DELETE FROM inputs where id=$id";
$result= mysqli_query($connection,$sql);
if($result){
    echo "<script>alert('Username deleted successfully!');
    window.location.href = 'index.php';
    </script>";
}
}
?>