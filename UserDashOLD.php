<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Dash.css">
    <link rel="stylesheet" href="Css/uploadfile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="Text/Javascript">
        function openUpload() {
            $('#foruploadfile').load('./Uploadfile.php', function () {
                $('#popUpdiv').show();
            });
            //$('#main-content').hide();
        }
    </script>
    <title>User Dashboard</title>
</head>

<body>
    <div class="container" style="">
        <div class="sidebar">
            <div class="logo">
                <h1>
                    <img src="Logo fessage.png" width="145" height="79">
                </h1>
            </div>
            <div class="sidebar_menu">
                <ul>
                    <li class="sidebar-home">
                        <a href="./UserDash.php">
                            <span>
                            </span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-Upload">

                        <input type="button" id="Upload_button" value="Upload" onclick="openUpload()"/>


                    </li>
                    <li class="sidebar-Seefiles">
                        <a href="SeeFiles.php">

                            <span>See Files</span>
                        </a>
                    </li>
                    <li class="sidebar-Setting">
                        <a href="UserSetting.php">
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
                <div class="support">
                    <h1>Support 24/7</h1>
                    <p>Contacts us anytime</p>
                    <input type="Button" value="Start" onClick="location:'ContactUs.php'"></input>
                </div>
            </div>
        <div class="main-content" id="foruploadfile">
                <div class="search-bar">
                    <span><input type="search-bar"></span>
                    <span><img src="Images/Userprofile.png"></span>
                    <span><img src="./Images/Logout.png" onclick="<?php include('phpscripts/logout.php')?>"></span>

                </div>
                <div class="files">
                    <div class="pic">
                        <span><img src="Images/Userprofile.png"></span>
                        <span>My file 1</span>
                    </div>
                    <div class="pic">
                        <span><img src="Images/Userprofile.png"></span>
                        <span>My file 2</span>
                    </div>
                </div>
                <div class="recent-files">
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                    <div class="recentfile">
                        <span class="pic">
                            <img src="Images/Userprofile.png">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
//session_start();
//echo $_SESSION['id'];
?>

</html>