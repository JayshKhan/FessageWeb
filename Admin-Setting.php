<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K5552TCGLY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K5552TCGLY');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Css/Dash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Admin Settings</title>
    <?php include('./phpscripts/notification_checker.php');
        include('./phpscripts/UserCounter.php');
        // $U_count = $_SESSION["userCount"];
        $users = $_SESSION["users"];
        $U_count = count($users);
        $SpaceUsed = $_SESSION["Size"];
        $SpaceUsedPercentage = $_SESSION["space%"];
        $N_count = $_SESSION["notificationCount"];
        $notifications = $_SESSION["notifications"];
        $iterator = 0;
    ?>
</head>

<body>
    <div id="mySidenav" class="sidenav">
    <p class="logo"><img src="Logo fessage.png" width="145" height="79"><span class="menu">&#9776;</span></p>
    <p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="AdminDash.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="Manage-User.php"class="icon-a"><i class="fa fas fa-users icons"></i> &nbsp;&nbsp;Manage Users</a>
  <a href="Admin-Setting.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Settings</a>

</div>
<div id="main">

    <div class="head">
        <div class="col-div-6">
<p class="nav"> Dashboard</p>

</div>
    
    <div class="col-div-6">
<!--        <input type="search-bar" name="Search" placeholder="Search"  class="fa fa-search search-icon"> -->
        

        
<!--        <i class="fa fa-bell noti-icon"></i>-->
<!--        <div class="notification-div">-->
<!--            <p class="noti-head">Notification <span>--><?php //echo $N_count?><!--</span></p>-->
<!--            <hr class="hr" />-->
<!--            --><?php //while($iterator<$N_count)
//                {
//                    if($notifications[$iterator]["type"]=="1")
//                    {
//                        echo "<p> User Added
//                        <span> UserName:  ".$notifications[$iterator]["name"]."  </span>
//                        </p>";
//                    }
//                    else
//                    {
//                        echo "<p> User Deleted His Account
//                        <span> User Removed His Account </span>
//                        </p>";
//                    }
//                    $iterator=$iterator+1;
//                } //end While Loop
//                $iterator=0;
//            ?>
<!--        </div>-->
    <div class="profile">

        <img src="Images/Userprofile.png" class="pro-img" />
        <p>Jaysh Khan <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
        <div class="profile-div">
        <p><i class="fa fa-user"></i> &nbsp;&nbsp;<a href="Admin-Setting.php">Profile</a></p>
            <p><i class="fa fa-cogs"></i> &nbsp;&nbsp;<a href="Admin-Setting.php">Settings</a></p>
            <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;<a href="./phpscripts/logout.php">Log Out</a></p>
        </div>
    </div>
</div>
    <div class="clearfix"></div>
</div>

    <div class="clearfix"></div>
    <br/>
    
    <div class="col-div-4-1">
        <div class="box">
            <p class="head-1">Jaysh Khan</p>
            <p class="number">Jayshkhan10@gmail.com</p>
            <p class="percent">03161675557<!-- <i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span> --></p>
            <i class="fa fas fa-users box-icon"></i>
        </div>
    </div>
    <div class="col-div-4-1">
        <div class="box">
            <p class="head-1">Storage Used</p>
            <p class="number"><?php echo $SpaceUsed?></p>
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
                    <input type="hidden" name="userID" value=1>
                    <input type="hidden" name="returnAdd" value="../Admin-Setting.php">
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
            <p class="head-1">Storage</p>

            <div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> <?php echo $SpaceUsedPercentage?>% </div>
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

<?
                  include("./phpscripts/changePass.php");
                  ?>
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