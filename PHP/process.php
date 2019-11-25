<?php

    $mysqli = new mysqli('localhost','Vitomir Dragan','1234','housesdatabase') or die(mysqli_error($mysqli));
    $id = '';
    $nume = '';
    $oras = '';
    $etaj = '';
    $pret = '';
    $update = false;

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM housestable WHERE ID=$id") or die($mysqli->error());
        header("Location: http://localhost/myProject/PHP/CautaAdmin.php#StergeAnunt.php");
    }

    if(isset($_GET['edit']))
    {
        $update = true;
        $id = $_GET['edit'];
        $result = $mysqli->query("SELECT * FROM housestable WHERE id=$id") or die($mysqli->error());

        $row = $result->fetch_array();
        $nume = $row['Nume'];
        $oras = $row['Oras'];
        $etaj = $row['Etaj'];
        $pret = $row['Pret'];
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $floor = $_POST['floor'];
        $price = $_POST['price'];
        $mysqli->query("UPDATE housestable SET Nume='$name', Oras='$city', Etaj='$floor', Pret='$price' WHERE id=$id") or die($mysqli->error);
        header("Location: http://localhost/myProject/PHP/CautaAdmin.php#StergeAnunt.php");
    }
