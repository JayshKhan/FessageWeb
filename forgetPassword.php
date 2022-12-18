<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/login.css">
    <title>Login</title>
</head>
<body class="body">
    <form action="./Login.php" method="POST">
    <div class="info">
            <h1>Restore Password</h1>
            <label class="signinlabel"> Input detail </label><br>
            <input  type="text" name="user_name" placeholder="Username" id="username" required><br>
            <input  type="Email" name="user_email" placeholder="Email" id="email" required> <br>
            <button class="custom-btn btn">Restore</button><br><br>
            <div class="hidden_restore">
            <input  type="text" name="newPass" placeholder="New Password" id="newPass" required><br>
            <input  type="text" name="retype_newPass" placeholder="Email" id="retype_newPass" required> <br>
            <button class="custom-btn btn">Done</button><br>
            </div>
        </div>

    </form>
    <img class="footer" src="Images/Signin_Page_Footer_1.png" alt="Footer">
</body>

<?php

?>
</html>