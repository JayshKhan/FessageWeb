<?php
include('./db.php');
$id = $_POST['userID'];
$currentPassword = $_POST['CurrentPassword'];
$newPass = $_POST['NewPassword'];
$confirmNewPass = $_POST['ConfirmNewPass'];
$returnAddress = $_POST["returnAdd"];
if($newPass == $confirmNewPass){
    $sql = "SELECT * FROM `users` WHERE id='$id' and password='$currentPassword'";
    if (isset($conn)) {
        $result = $conn->query($sql);
        if ($result->num_rows>0) {
           $sql = "UPDATE `users` SET `password`='$newPass'WHERE `id` =$id";

            $passUpdate = $conn->query($sql);

        }
        else {
            ?>
            <script type="Text/Javascript">
                $("#password").addClass("error");
                $("#password").after('<span style="font-size: 10px;">Enter a valid password.</span>');

            </script>
            <?php
        }
    }
}

else {
    ?>
    <script type="Text/Javascript">

        $("#newPassClass").addClass("error");
        $("#newPassClass").after('<span style="font-size: 10px;">Enter a valid password.</span>');

    </script>
    <?php
}
header("location: $returnAddress");
?>