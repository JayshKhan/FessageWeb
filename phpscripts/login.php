<?php
include('phpscripts/db.php');
if(isset($_POST['user_email'])) {
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $sql = "SELECT * FROM `users` WHERE `useremail`='$email'";
    if (isset($conn)) {

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $sql = "SELECT * FROM `users` WHERE `password`='$password'";
            $passAuth = $conn->query($sql);
            if ($passAuth->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['username']=$row['username'];
                    $_SESSION['id']=$row['id'];
                    $_SESSION['foldername']=$row['foldername'];
                    $_SESSION['useremail']=$row['useremail'];
                    $_SESSION['accounttype']=$row['accounttype'];
                    $_SESSION['usedSpace']=$row['usedSpace'];
                    $_SESSION['allowedSpace']=$row['allowedSpace'];
                    if($row["accounttype"]==1) {
                        header("location: ./AdminDash.php");
                    }
                    else{
                        header("location: ./UserDash.php");
                    }
                }
                $result->free_result();
            } else {
                ?>
                <script type="Text/Javascript">

                    $("#password").addClass("error");
                    $("#password").after('<span style="font-size: 10px;">Enter a valid password.</span>');

                </script>
                <?php
            }
        } else {
            ?>
            <script type="Text/Javascript">

                $("#email").addClass("error");
                $("#email").after('<span style="font-size: 10px">Email Does Not exist.</span>');

            </script>
            <?php ;
        }
    } else {
        echo "connection failed";
    }

    $conn->close();
}
?>