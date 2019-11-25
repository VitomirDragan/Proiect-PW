<?php
if(isset($_POST['registerAdmin']))
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    $conn = new mysqli('localhost','Vitomir Dragan','1234','housesdatabase');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error );
    }
    else {
        $stmt = $conn->prepare("insert into admin(Username,Password,`Phone number`,`Email address`) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, md5($password), $phoneNumber, $email);
        $stmt->execute();
        echo "You have been registered successfully to Imo.Home...";
        $stmt->close();
        $conn->close();
        header("Location: http://localhost/myProject/PHP/CautaAdmin.php");
    }
}