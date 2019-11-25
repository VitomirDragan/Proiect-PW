<?php
        if (isset($_POST['login'])) {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $username = $_POST['uname'];
            $password = $_POST['psw'];

            $conn = new mysqli('localhost', 'Vitomir Dragan', '1234', 'housesdatabase');
            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            } else {
                $sql = "SELECT * FROM admin WHERE Username='$username' && Password=md5('$password')";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    header("Location: http://localhost/myProject/PHP/CautaAdmin.php");
                } else {
                    $sql = "SELECT * FROM users WHERE Username='$username' && Password=md5('$password')";
                    $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            header("Location: http://localhost/myProject/PHP/Cauta.php");
                        }
                        else {
                            header("Location: http://localhost/myProject/PHP/Login&Register.php");
                        }
                }
            }
        }
mysqli_close($conn);