<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/Dash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        
    .profile-pic {
        width: 200px;
        max-height: 200px;
    }

    /* Element | http://localhost/FSS/UserSetting.php */

    .fa-camera {
    /* margin-bottom: 1px; */
    /* margin-top: -; */
    bottom: 10px;
    right: 430px;
    }

    /* Inline #2 | http://localhost/FSS/UserSetting.php */

    .upload-button {
    position: absolute;
    }

    /* Element | http://localhost/FSS/UserSetting.php */

    div.col-div-4-1:nth-child(6)>div:nth-child(1)>table:nth-child(1)>tbody:nth-child(1)>tr:nth-child(1)>td:nth-child(1) {
        padding-left: 0px;
        padding-right: 0px;
        border-bottom-width: 0px;
        border-right-width: 0px;
        border-top-width: 0px;
        border-left-width: 0px;
    }


    /* Element | http://localhost/FSS/UserSetting.php */

    div.col-div-4-1:nth-child(6)>div:nth-child(1) {
        border-left-style: solid;
        border-left-width: 0px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
    }


    /* Element | http://localhost/FSS/UserSetting.php */

    div.col-div-4-1:nth-child(6)>div:nth-child(1)>table:nth-child(1)>tbody:nth-child(1)>tr:nth-child(1)>td:nth-child(2) {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }
    .file-upload {
        display: none;
    }
    .circle {
        border-radius: 100% !important;
        overflow: hidden;
        width: 128px;
        height: 128px;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }
    img {
        max-width: 100%;
        height: auto;
    }
    .p-image {

    right: 30px;
    color: #666666;
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }
    .p-image:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }
    .upload-button {
    font-size: 1.2em;
    }

    .upload-button:hover {
    transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    color: #999;
    }
        </style>
        <title>User Settings</title>
</head>
<?php
	include("./phpscripts/GetProfileImage.php");
	$ProImageLoc = $_SESSION["profilepic"];
	include("./phpscripts/UserCounter.php");
    $email = $_SESSION["useremail"];
    $Name = $_SESSION['username'];
    $id=$_SESSION['id'];
    $usedSpace=UnitConverter($_SESSION['usedSpace']);
    $SpacePer=$_SESSION['space%'];
	?>
<body>
    <input type="hidden" name="UsersEmail" id="UsersEmail" value="<?php echo $email?>">
    <div id="mySidenav" class="sidenav">
    <p class="logo"><img src="Logo fessage.png" width="145" height="79"><span class="menu">&#9776;</span></p>
    <p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="UserDash.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="UserDash.php"class="icon-a"><i class="fa fas fa-users icons"></i> &nbsp;&nbsp;Upload File</a>
  <a href="UserSetting.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Settings</a>


</div>
<div id="main">

    <div class="head">
        <div class="col-div-6">
<p class="nav"> Dashboard</p>

</div>
    
    <div class="col-div-6">

    <div class="profile">

        <img src="<?php echo $ProImageLoc?>" class="pro-img" />
        <p><?php echo $Name?> <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
        <div class="profile-div">
            <p><a href="./UserDash.php"><i class="fa fa-user"></i> &nbsp;&nbsp;Profile</a></p>
           <a href="./phpscripts/logout.php"><p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p></a>
        </div>
    </div>
</div>
    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <br/>

    <div class="col-div-4-1">
        <div class="box">
            <table style="border: none;">
                <tr>
                    <td style="border: none;">
            <!-- from here -->
            <div class="circle">
       <img class="profile-pic" src="<?php echo $ProImageLoc?>">

     </div>
     <div class="p-image">
       <i class="fa fa-camera upload-button"></i>
        <input class="file-upload" type="file" accept="image/*"/>
     </div>
            <!-- to here -->
            </td>
            <td style="border: none;">
            <p class="head-1"><?php echo $Name?></p>
            <p class="number"><?php echo $email?></p>
            <!-- <p class="percent">User Phone here<i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span></p> -->
            <i class="fa fas fa-users box-icon"></i>
            </td>
            </tr>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        file = input.files[0];
 if(file != undefined){
   formData= new FormData();
   if(!!file.type.match(/image.*/)){
     formData.append("image", file);
     $.ajax({
       url: "phpscripts/uploadprofilepic.php",
       type: "POST",
       data: formData,
       processData: false,
       contentType: false,
       success: function(data){
           alert('success');
       }
     });
   }else{
     alert('Not a valid image!');
   }
 }else{
   alert('Input something!');
 }
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
    </script>
    <div class="col-div-4-1">
        <div class="box">
            <p class="head-1">Storage Used</p>
            <p class="number"><?php echo $usedSpace?></p>
            <i class="fa fa-circle-o-notch box-icon"></i>
        </div>
    </div>

    
    <div class="clearfix"></div>
    <br/>

    
    <div class="col-div-4-1">
        <div class="box-1">
            <div class="content-box-1">
            <p class="head-1">Change Password</p>
            <br/>
            <table>
                <form action="./phpscripts/changePass.php" method="post">
                    <input type="hidden" name="userID" value=<?php echo $id?>>
                    <input type="hidden" name="returnAdd" value="../UserSetting.php">
                 <tr>
                    <td>Current Password</td>
                        <td><input name="CurrentPassword" type="password" placeholder="**************" id="password" style="border-style: none; background: none;"></td>
                      </tr>
                      <tr>
                        <td>New Password</td>
                        <td><input name="NewPassword" type="password" placeholder="Enter New Password" style="border-style: none; background: none;"></td>
                      </tr>
                      <tr>
                        <td >Confirm new Password</td>
                        <td><input name="ConfirmNewPass" type="password" placeholder="Confirm New Password" id="newPassClass" style="border-style: none; background: none;"></td>
                      </tr>
                  <tr>
                    <td colspan="2">
                        <button style="background: #0099FF; border-radius: 40px; border: none; padding: 3%; width:100%">Change</button></td>
                  </tr>
                  </form>
                
            </table>
                
        </div>
    </div>
    </div>
    <div class="col-div-4-1">
        <div class="box-1">
            <div class="content-box-1">
            <p class="head-1">Space <span>View All</span></p>

            <div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> <?php echo $SpacePer?>% </div>
    </div>
  </div>
        </div>
        </div>
    </div>
    <div class="col-div-4-1">

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".menu").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('display', 'none');
    $(".logo1").css('display','block');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icon-a").css('height', '25px');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".menu1").css('display','block');
      $(".menu").css('display','none');
  });

$(".menu1").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
    $(".logo").css('display','block');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".menu").css('display','block');
      $(".menu1").css('display','none');
 });

</script>
<script>
$(document).ready(function(){
  $(".profile p").click(function(){
    $(".profile-div").toggle();
    
  });
  $(".noti-icon").click(function(){
    $(".notification-div").toggle();
  });



  
});
</script>    
    

</body>

</html>


