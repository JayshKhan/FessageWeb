<?php
session_start();

$email=$_SESSION["useremail"];
$tmp_name=$_FILES["image"]["tmp_name"];

if(!file_exists("Users/"))
{
    mkdir("Users/", 0777, true);
}
$folderLocation = "Users/".$email;
if(!file_exists($folderLocation))
{
    echo "Creating folder userfolder";
    mkdir($folderLocation, 0777, true);
}
if(move_uploaded_file($tmp_name,$folderLocation."/"."Profile_Pic"))
{
    echo "Done";
}
?>