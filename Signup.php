<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K5552TCGLY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K5552TCGLY');
</script>
    <link rel="stylesheet" type="text/css" href="Css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=-1.0">
    <title>signup</title>
</head>

<body class="body">
    <form action="Signup.php" method="POST">
        <div class="info">
            <h1>Signup</h1>
            <ldbabel class="signinlabel" style=""> Sign in and start managing you files</label><br>
            <input type="Text" name="user_name" placeholder="Name" required> <br>
            <input type="Email" name="user_email" placeholder="Email" id="email" required> <br>
            <input type="password" name="user_password" placeholder="Password" id="password" required><br>
            <input type="password" name="retyped_password" placeholder="retype Password" id="password-check" required><br>
            <button class="custom-btn btn" id="submit">Signup</button>
        </div>
    </form>
    <img class="footer" src="Images/Signin_Page_Footer_1.png">
    <!--  Succeess POP UP-->
        
    <div class='message'>
    <div class='check'>
        &#10004;
    </div>
    <p>
        Success
    </p>
    <p>
        Registered Success Fully
    </p>
    <button id='ok'>
        OK
    </button>
</div>
</body>


<script src="JS/signup.js" type ="Text/Javascript">
</script>

<?php include('phpscripts/signup.php')?>
</html>