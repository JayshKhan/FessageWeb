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
    <title>Admin Dashboard</title>
    <?php include('./phpscripts/notification_checker.php');
        include('./phpscripts/UserCounter.php');
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
<!--        <input type="search-bar" name="Search" placeholder="Search user"  class="fa fa-search search-icon"> -->
<!--        <i class="fa fa-bell noti-icon"></i>-->
<!--        <div class="notification-div">-->
<!--            <p class="noti-head">Notification <span> --><?php //echo $N_count?><!-- </span></p>-->
<!--            <hr class="hr">-->
<!--            --><?php //while($iterator<$N_count)
//                {
//                    if($notifications[$iterator]["type"]=="1")
//                    {
//                        echo "<p> User Added
//                        <span> ".$notifications[$iterator]["name"]."  </span>
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
        <p> Jaysh Khan <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
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
            <p class="head-1">No of Users</p>
            <p class="number"><?php echo $U_count;?></p>
            <!-- <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Since Last Months</span></p> -->
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

    
<!--     <div class="col-div-4-1">
        <div class="box-1">
            <div class="content-box-1">
            <p class="head-1">Overview</p>
            <br/>
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
            
        </div>
    </div>
    </div> -->
    <div class="col-div-4-1">
        <div class="box-1">
            <div class="content-box-1">
            <p class="head-1">Space Used </p>

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
    
    <div class="clearfix"></div>
    <br/>
    <div class="col-div-12">
        <div class="box-8">
        <div class="content-box">
            <p>User Feedback<span>See All</span></p>
            <br/>
            <table>
  <tr>

    <th>Subject</th>
    <th>FeedBack</th>
    <th>Name</th>
    <th>Email</th>
  </tr>

  <!-- Loop Starts Here -->
  <?php 
    $sql = "SELECT * FROM `feedback`";
    if (isset($conn)) {
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $notificationCount=$result->num_rows;
            while($row=$result->fetch_assoc()){
  ?> 
  <tr>
    <td><?php echo $row["subject"]?></td>
    <td><?php echo $row["FeedBack"]?></td>
    <td><?php echo $row["Name"]?></td>
    <td><?php echo $row["Email"]?></td>
  </tr>
<?php 
}}}
?>
<!-- Loop End Here -->
  
  
</table>
        </div>
    </div>
    </div>

    
        
    <div class="clearfix"></div>
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




















<!--     <div class="container" style="">
        <div class="sidebar">
            <div class="logo">
                <h1>
                    <a href="Index.php"><img src="Logo fessage.png" width="145" height="79"></a>
                </h1>
            </div>
            <table>
                <tr>
                    <td>
                        <div class="sidebar_menu">
                            <ul>
                                <li class="sidebar-home">
                                    <a href="AdminDash.php">
                                        <span>
                                        </span>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="sidebar-Manage-user">
                                    <a href="Manage-User.php">
                                        <span>Manage Users</span>
                                    </a>
                                </li>
                                <li class="sidebar-Setting">
                                    <a href="Admin-Setting.php">
                                        <span>Setting</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="main-content">
                            <div class="header-bar">

                                <span><img src="Images/Userprofile.png"></span>
                                <span><img onclick="location .href='index.php'" src="Images/Logout.png"></span>

                            </div>
                            <table>
                                <tr>
                                    <td>
                                        <div class="User-count">
                                            <img src="Images/Users.png" alt="Users-Icon">
                                            <h1>7</h1>
                                            <h3>No of Users</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="storage-bar">
                                            <img src="Images/Circular-bar.png" alt="circularbar">
                                            <p>10 Gb used by the users</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span>
                                            <img src="Images/Search.png" alt="Search Icon">
                                            <input type="search-bar">
                                        </span>
                                        <div class="user-request">
                                            <img src="Images/User2.png" alt="User Image icon">
                                            Username
                                            <img src="Images/Delete.png" alt="Disapprove Icon">
                                            <img src="Images/Approve.png" alt="approve Icon">
                                        </div>
                                        <div class="user-request">
                                            <img src="Images/User2.png" alt="User Image icon">
                                            Username
                                            <img src="Images/Delete.png" alt="Disapprove Icon">
                                            <img src="Images/Approve.png" alt="sapprove Icon">
                                        </div>
                                        <div class="user-request">
                                            <img src="Images/User2.png" alt="User Image icon">
                                            Username
                                            <img src="Images/Delete.png" alt="Disapprove Icon">
                                            <img src="Images/Approve.png" alt="sapprove Icon">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="search-user">
                                           
                                                <tr>
                                                    <td>
                                                        <div class="User-queries">
                                                            <h1>Users Queries from support</h1>
                                                            <div class="query">
                                                                <img src="Images/Userprofile.png"
                                                                    alt="User Profile pic">
                                                                . Jaysh Khan<br>
                                                                <p>
                                                                    I am Having Trouble Changing my password Please
                                                                    guide me through
                                                                    it
                                                                </p>
                                                            </div>
                                                            <div class="query">
                                                                <img src="Images/User2.png" alt="User Profile pic">
                                                                . Bob<br>
                                                                <p>
                                                                    How Can I Delete My files From the Website.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="reply">
                                                            <h5>reply to:</h5>
                                                            <h4>Jaysh Khan</h4>
                                                            <div class="reply-here">
                                                                <textarea name="message-reply" id="Reply" cols="30"
                                                                    rows="10"
                                                                    placeholder="type your reply here"></textarea>
                                                                <img src="Images/link.png" alt="link icon here">
                                                                <img src="Images/Send.png" alt="send icon here">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            


                                        </div>
                                    </td>
                                </tr>
                            </table>



                        </div>
                    </td>
                </tr>
            </table>


        </div>
    </div> -->
</body>

</html>