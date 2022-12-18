<?php
session_start();
include("./phpscripts/UserCounter.php");
$id = $_SESSION['id'];
$previousSize = $_SESSION['usedSpace'];
$file_name = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$tmp_name = $_FILES['file']['tmp_name'];
$foldername = $_FILES['file']['foldername'];
$extension = $_FILES['file']['type'];

$file_up_name = $id."_-_". $file_name;

if(!file_exists("files/"))
{
    mkdir("files/", 0777, true);
}


if(move_uploaded_file($tmp_name,"../files/".$file_up_name))
{
    $location = "files/".$file_up_name;
    include('db.php');
    $_SESSION["usedSpace"]=$_SESSION["usedSpace"]+$file_size;
;
    $sql = "INSERT INTO `files`( `userid`, `fileName`, `fileType`, `fileSize` , `location` , `StoredFileName`) VALUES ('".$id."','".$file_name."','".$extension."','".$file_size."','".$location."','".$file_up_name."')";
    $result = $conn->query($sql);
    $usersql = "UPDATE `users` SET `usedSpace`=".$_SESSION["usedSpace"]." WHERE `id` = ".$id.";";
    $result = $conn->query($usersql);
}