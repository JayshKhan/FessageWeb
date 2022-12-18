<?php
session_start();
$fileid = $_POST['rowID'];
$sqlfile = "delete from sentfile where id = '$fileid'";
include('./db.php');
if (isset($conn)) {
    if($result = $conn->query($sqlfile)){
            header("location: ../UserDash.php");
    }
}
