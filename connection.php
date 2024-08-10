<?php
$connection=new Mysqli("localhost","root","","crud");

if(!$connection) {
    die("connection error" .mysqli_connect_error());
}
?>