<?php
include('./phpscripts/db.php');

if(isset($_POST['user_name'])) {
    $name =$_POST['user_name'];
    $email =$_POST['user_email'];
    $password =$_POST['user_password'];
    $email =$_POST['user_email'];
    $sql = "SELECT * FROM `users` WHERE `useremail`='$email'";
    if (isset($conn))
    {
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            ?>
            <script type="Text/Javascript">

                $("#email").addClass("error");
                $("#email").after('<span  style="font-size: 10px">Email Already exists.</span>');
            </script>
            <?php
        }
        else
        {
            echo signup($name, $email, $password);


            // $sql="INSERT INTO `users`(`username`, `useremail`, `password`, `accounttype`, `foldername`) VALUES ('$name','$email','$password',0,'$email')";
            chdir("Users");
            //creating directory to store user profile information
            mkdir($email,0777,true);
            if (isset($conn))
            {
                if ($conn->query($sql) === TRUE)
                {
                    $sqlnotice = "INSERT INTO `notification`(`type`, `name`) VALUES ('1','$name')";
                    $conn->query($sqlnotice);
                    header('Location: ./Login.php');
                }
                else
                {
                    echo "failed";
                    echo $sql;
                }
            }
        }

    }
}

function signup($name, $email, $password) {
    // validate input
    if (empty($name) || empty($email) || empty($password)) {
      return "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return "Invalid email address";
    }
    if (strlen($password) < 8) {
      return "Password must be at least 8 characters long";
    }
  
    // create user in database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    $stmt->execute();
    $stmt->close();
  
    return "Account created successfully";
  }
?>