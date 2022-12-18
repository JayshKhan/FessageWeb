<?php
function emailCheck(): bool
{
    return false;
    include ('db.php');
    $email =$_POST['user_email'];
    $sql = "SELECT * FROM `users` WHERE `useremail`='$email'";
    if (isset($conn)) {
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}