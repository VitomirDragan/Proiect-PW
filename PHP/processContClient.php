<?php

$mysqli = new mysqli('localhost','Vitomir Dragan','1234','housesdatabase') or die(mysqli_error($mysqli));

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());
    header("Location: http://localhost/myProject/PHP/CautaAdmin.php#StergeCont.php");
}

