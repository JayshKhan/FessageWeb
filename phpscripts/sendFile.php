<?php
session_start();
$fileID=$_POST['fileid'];
$fileName=$_POST['fileName'];
$toID=$_POST['toID'];
$fromID=$_POST['fromID'];
$fromName=$_POST['fromName'];

$sql = "INSERT INTO `sentfile`(`toID`, `fromID`, `fromName`, `fileID`, `fileName`) VALUES ('$toID','$fromID','$fromName','$fileID','$fileName')";
include('./db.php');
if (isset($conn)) {

    if ($result = $conn->query($sql)) {

            ?>
            <script>
                alert("File Sent");
            </script>
            <?php
        header("location:../SendFileDash.php");

    }


}

