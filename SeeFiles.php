<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link rel="stylesheet" href="Css/style.css">-->
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
                        <a href="UserDash.php">
                            <img src="Images/Home.png" alt="Home Icon Here">
                            Home
                        </a>
                    </li>
                    <li class="sidebar-Upload">
                        <a href="UploadFile.php">
                            <img src="Images/upload.png" alt="Upload Icon Here">
                            Upload
                        </a>
                    </li>
                    <li class="sidebar-Seefiles">
                        <a href="Seefiles.php">
                            <img src="Images/Files.png" alt="See Files Icon Here">
                            See Files
                        </a>
                    </li>
                    <li class="sidebar-Setting">
                        <a href="UserSetting.php">
                            <img src="Images/Setting.png" alt="Setting Icon Here">
                            Setting
                        </a>
                    </li>
                </ul>
                <div class="support">
                    <img src="Images/Support.png" alt="clickable Support Icon here">
                </div>
            </div>
            <div class="main-content">
                <div class="search-bar">
                    <span><input type="search-bar"></span>
                    <span><img src="Assets/Userprofile.png"></span>
                    <span><img src="Assets/Logout.png"></span>

                </div>
                <div class="Main-File">

                    <h1>My file 1</h1>
                    <span>
                        <img src="Images/VideoImgae1.png" alt="Video File thumbnail">
                    </span>

                    <div class="User-Info">
                        <span>
                            <img src="Images/Userprofile.png">
                        </span>
                        Video Title
                        <small>@JayshKhan</small>

                    </div>
                    -----------------------------------------------------------------------
                    <div class="File-descrption">
                        <small>Some Description ... </small>
                    </div>
                </div>
                <div class="other-files">
                    <span>
                        <h1> Other Files </h1>
                    </span>
                    <div class="More-options">
                        <h2>...</h2>
                    </div>
                </div>

                <div class="Time-left">
                    <img src="Images/time.png" alt="Clock Icon">
                    <h1>7</h1>
                </div>

                <div class="Total-Views">
                    <img src="Images/FileView.png" alt="Views Icon">
                    <h1>5</h1>
                </div>

            </div>
        </div>
    </div>
    </div>
        <button onclick="location. href = 'UserDash.php'">User Home</button>
</body>

</html>