<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/uploadfile.css">
</head>
<!-- this will pop up on existing user page when user want to upload Files-->
<?php
    session_start();
?>
<body>
    <div class="Main-container">
        <div class="body" id="popUpdiv">
            <link rel="stylesheet" href="Css/uploadfile.css">
                <div class="wrapper">
            <header>Fessage File Uploader</header>
            <form action="#">
            <input type="hidden" name="foldername" value="<?php echo $_SESSION["foldername"];?>">
            <input type="hidden" name="id" value="<?php echo $_SESSION["id"];?>">
            <input class="file-input" type="file" name="file" hidden>
            <i class="fas fa-cloud-upload-alt"></i>
            <p>Browse File to Upload</p>
            </form>
            <section class="progress-area"></section>
            <section class="uploaded-area"></section>
            <script src="JS/Uploadfile.js" type="Text/Javascript"></script>
        </div>
        </div>
    </div>

</body>




</html>