<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K5552TCGLY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K5552TCGLY');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/login.css">
    <title>Login</title>
</head>
<body class="body">
    <form action="./Login.php" method="POST">
    <div class="info">
            <h1>Sign In</h1>
            <label class="signinlabel"> Sign in and start managing you files</label><br>
            <input  type="Email" name="user_email" placeholder="Email" id="email" required> <br>
            <input  type="password" name="user_password" placeholder="Password" id="password" required><br>
            <button class="custom-btn btn">Login</button><br>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>

    </form>
    <img class="footer" src="Images/Signin_Page_Footer_1.png" alt="Footer">
</body>
<?php
include('phpscripts/login.php');
?>
</html>