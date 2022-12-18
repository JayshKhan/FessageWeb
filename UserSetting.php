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
  <a href="UserSetting.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Settings</a><!-- 
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
  <a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>
  <a href="#"class="icon-a"><i class="fa fa-circle icons"></i> &nbsp;&nbsp;Icons</a> -->


</div>
<div id="main">

    <div class="head">
        <div class="col-div-6">
<p class="nav"> Dashboard</p>

</div>
    
    <div class="col-div-6">
<!--        <input type="search-bar" name="Search" placeholder="Search"  class="fa fa-search search-icon"> -->
<!--        -->
<!---->
<!--        -->
<!--        <i class="fa fa-bell noti-icon"></i>-->
<!--        <div class="notification-div">-->
<!--            <p class="noti-head">Notification <span>2</span></p>-->
<!--            <hr class="hr" />-->
<!--            <p>Your Order is Placed-->
<!--                <span>Lorem Ipsum is simply dummy </span>-->
<!--            </p>-->
<!--            <p>Your Order is Placed-->
<!--                <span>Lorem Ipsum is simply dummy </span>-->
<!--            </p>-->
<!--            <p>Your Order is Placed-->
<!--                <span>Lorem Ipsum is simply dummy </span>-->
<!--            </p>-->
<!--        </div>-->
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
<!-- </div>
        <div class="col-div-4-2">
            <div class="box-1">
                <div class="row">
                    
                    <div class="p-image">
                    <div class="small-12 medium-2 large-2 columns">
                        <div class="circle">
                        <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--            <div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class= "fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div> -->
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
            <!-- <p class="percent" style="color:red!important"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> 50.64% <span>Since Last Months</span></p> -->
            <i class="fa fa-circle-o-notch box-icon"></i>
        </div>
    </div>
<!--     <div class="col-div-4-1">
        <div class="box">
            <p class="head-1">orders</p>
            <p class="number">35343</p>
            <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span></p>
            <i class="fa fa-shopping-bag box-icon"></i>
        </div>
    </div> -->
    
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
                <!--  <div>
                <p>Current Password:
                    <input name="password" type="text" id="Password" value="***********">
                </p>
            </div>
            <div>
                <p>New Password:
                    <input name="password" type="text" id="Password">
                </p>
            </div>
            <div>
                <p>Confirm Password:
                    <input name="password" type="text" id="Password">
                </p>
                <button>Change</button><br> -->
<!-- 
            <div class="m-box active">
                <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                <span class="no">+2343</span>
            </div>

            <div class="m-box">
                <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                <span class="no">+2343</span>
            </div>

            <div class="m-box">
                <p>Member Profit<br/><span class="no-1">Last Months</span></p>
                <span class="no">+2343</span>
            </div>
             -->
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
<!--         <div class="box-1">
            <div class="content-box-1">
            <p class="head-1">Acitivity <span>View All</span></p>
            <br/>
            <p class="act-p"><i class="fa fa-circle" ></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
            <p class="act-p"><i class="fa fa-circle" style="color:red!important;"></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
            <p class="act-p"><i class="fa fa-circle" style="color:green!important;"></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
            <p class="act-p"><i class="fa fa-circle" ></i> Lorem Ipsum is simply dummy text of the &nbsp;&nbsp;&nbsp;&nbsp;printing and typesetting industry. </p>
            
        </div>
    </div> -->
    </div>
 <!--    
    <div class="clearfix"></div>
    <br/>
    <div class="col-div-12">
        <div class="box-8">
        <div class="content-box">
            <p>Top Selling Projects <span>Sell All</span></p>
            <br/>
            <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  
  
</table>
        </div>
    </div>
    </div>

    
        
    <div class="clearfix"></div>
</div> -->


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
    





























<!-- 


    <div class="logo">
        <h1>
            <a href="Index.php"><img src="Logo fessage.png" width="145" height="79"></a>
        </h1>
    </div>
    <div class="main-content">
        <div class="Profile-info">
            <img src="Images/Userprofile.png" alt="Profile Picture">
            <label for="img">Upload</label>
            <h1>Jaysh Muhammad</h1>
            <h3>@Jkhan</h3>
        </div>
        <div class="storage-used">
            <progress id="storage" value="32" max="100"> 32% </progress>
            <label for="storage">32 % used:</label>
            <button>Search for More Storage</button>
        </div>
        <div class="Userinfo-change">
            <table>
                <tr>
                    <td>
                        <div class="info-holder">
                            <p>Email:
                                <input name="emailadress" type="text" id="emailadress"
                                    value="theuseremailadres@here.com">
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="info-holder">
                            <p>Phone No:
                                <input name="phoneNo" type="text" id="PhoneNo" value="0316*****57">
                            </p>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="info-holder">
                <p>Current Password:
                    <input name="password" type="text" id="Password" value="***********">
                </p>
            </div>
            <div class="info-holder">
                <p>New Password:
                    <input name="password" type="text" id="Password">
                </p>
            </div>
            <div class="info-holder">
                <p>Confirm Password:
                    <input name="password" type="text" id="Password">
                </p>
                <button>Change</button><br>
                <br><button onclick="location. href = 'AdminDash.php'">Admin Home</button>
            </div>

        </div>
    </div> -->
</body>

</html>






























<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php session_start();  
       $used = $_SESSION['usedSpace']/$_SESSION['allowedSpace']*100;
    ?>
</head>

<body>

    <div class="main-content">
        <div class="Profile-info">
            <img src="#" alt="Profile Picture">
            <h1><?php echo $_SESSION['username']?></h1>
            <h3><?php echo $_SESSION['id']?></h3>
        </div>
        <div class="storage-used">
            <progress id="storage" value="<?php echo $used?>" max="100"> <?php echo $used?> </progress>
            <label for="storage"><?php echo $used?> % used:</label>
            <button>Buy More</button>
        </div>
        <div class="Userinfo-change">
            <table>
                <tr>
                    <td>
                        <div class="info-holder">
                            <p>Email:
                                <input name="emailadress" type="text" id="emailadress"
                                    value="<?php echo $_SESSION['useremail']?>">
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="info-holder">
                            <p>Phone No:
                                <input name="phoneNo" type="text" id="PhoneNo" value="No number Given">
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="info-holder">
                <label for="countries">Country:</label>
                <select name="countries" id="countries">
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>Uk</option>
                </select>
            </div>
            <div class="info-holder">
                <p>Current Password:
                    <input name="password" type="text" id="Password" placeholder="***********">
                </p>
            </div>
            <div class="info-holder">
                <p>New Password:
                    <input name="password" type="text" id="Password" placeholder="***********">
                </p>
            </div>
            <div class="info-holder">
                <p>Confirm Password:
                    <input name="password" type="text" id="Password" placeholder="***********">
                </p>
                <button>Change</button>
            </div>
            <img src="Images/DeleteAccount.png" alt="delete account icon" id="Delete Account">
        </div>
    </div>
    <button onclick="location. href = 'UserDash.php'">User Home</button>
</body>

</html> -->