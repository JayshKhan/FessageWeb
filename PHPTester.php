<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('./phpscripts/notification_checker.php');
    include('./phpscripts/UserCounter.php');
    echo UnitConverter(400);
    
    ?>
    <video controls="controls" preload="metadata" width="400">
  <source src="files/33_-_big_buck_bunny_720p_5mb.mp4" type="video/mp4">
</video>
<img src="" alt="">
<source src="./files/33_-_aara.png" type="image/png">
</img>
<form action="./phpscripts/deletreFile.php" method="post">
  <input type="hidden" name="fileid" value="">
  <input type="hidden" name="location" value="">
  <input type="submit" value="Delete">
</form>
<iframe id="frmFile" src="./files/31_-_UPloade.txt"></iframe>
<br>

<div class="nameFilenotfound" style="">
<img id="displaynotfoundfile" src="./Images/zipfileUserDash.svg" alt="Cannot Preview" width="200" height="200">
  <h2>Jaysh kHan</h2>
</div>
            
<br>
<br>
<form action="./SendFileDash.php" method="post">
  <input type="hidden" name="fileid" value="36">
  <input type="hidden" name="fileName" value="big_buck bunny 720p_2mb.mp4">
  <input id="userdashbutton" type="submit" value="Send">
</form>
</body>
</html>