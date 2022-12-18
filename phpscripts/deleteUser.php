<?php
$id = $_POST['userIdtoDelete'];
$sql = "delete from users where id = '$id'";
include('./db.php');
if (isset($conn)) {
    $result = $conn->query($sql);
    header("location: ../Manage-User.php");
}
