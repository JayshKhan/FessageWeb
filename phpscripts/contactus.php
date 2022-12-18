<?php
$name = $_POST['name'];
$Email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
include("db.php");
$sql="INSERT INTO `feedback`(`Name`, `FeedBack`, `Email`, `subject`) VALUES ('$name','$message','$Email','$subject')";
if (isset($conn)) {
   if ($conn->query($sql)){
        ?>
        <script type="text/javascript">
            alert("Feedback Sent");
        </script>
        <?php
        header("location:../Index.php");
    }
}