<?php
session_start();
$fileid = $_POST['fileid'];
$location = $_POST['location'];
$size = $_POST['fileSize'];
$Userid = $_SESSION['id'];
$usedSpace = $_SESSION['usedSpace'];
$newUsedSpace = $usedSpace-$size;
$_SESSION['usedSpace'] = $newUsedSpace;

$sqlfile = "delete from files where id = '$fileid'";
$sqlUser = "UPDATE `users` SET `usedSpace`='$newUsedSpace' WHERE id=$Userid";

include('./db.php');
if (isset($conn)) {
    chdir("..");
    unlink($location);
        if($result = $conn->query($sqlfile)){
            if($result = $conn->query($sqlUser)) {
                header("location: ../UserDash.php");
            }
        }


}

