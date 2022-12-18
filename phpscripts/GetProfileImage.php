<?php
    session_start();
    $email=$_SESSION["useremail"];
    $loc = "./phpscripts/Users/".$email."/"."Profile_Pic";
    if(!file_exists($loc)){
        $_SESSION["profilepic"]="./Images/User2.png";
    }
    else{
        $_SESSION["profilepic"]=$loc;
    }