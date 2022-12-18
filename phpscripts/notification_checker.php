<?php
include('db.php');
session_start();
$notificationCount = 0;
$notifications =array();
$sql = "SELECT * FROM `notification`";
    if (isset($conn)) {
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $notificationCount=$result->num_rows;
            while($row=$result->fetch_assoc()){
                array_push($notifications,$row);
            }
        }
    }

    $_SESSION["notifications"]=$notifications;
    $_SESSION["notificationCount"]=$notificationCount;
    