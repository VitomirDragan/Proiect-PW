<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login/Register</title>
    <link rel="stylesheet" href="../CSS/loginRegisterFormDesign.css">
</head>
<body>
<div id="Login" class="modal">
    <form class="modal-content animate" action="/myProject/PHP/login_page.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" id="register" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" id="register" placeholder="Enter Password" name="psw" required>

            <button type="submit" id="register" name="login">Login</button>
            <button type="button" id="register" onclick="document.getElementById('Register').style.display='block'" class="registerbtn">Register</button>

        </div>
    </form>
</div>

<div id="Register" class="modal">
    <form class="modal-content animate" action="/myProject/PHP/register_page.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="phoneNumber"><b>Phone number</b></label>
            <input type="text" placeholder="Enter phone number" name="phoneNumber" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email" required>

            <button type="submit" name="register" class="registerbtn">Register</button>
        </div>

    </form>
</div>
</body>
</html>