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
    <!--link rel="stylesheet" href="Css/style.css">-->
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
    <title>Admin Dashboard</title>
</head>
<?php include('./phpscripts/db.php');?>
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
        <input type="search-bar" name="Search" id="myInput" onkeyup="SearchUser()" placeholder="Search"  class="fa fa-search search-icon"> 
        

        
<!--        <i class="fa fa-bell noti-icon"></i>-->
<!--        <div class="notification-div">-->
<!--            -->
<!--            <p class="noti-head">Notification <span>--><?php //echo $N_count?><!--</span></p>-->
<!--            <hr class="hr" />-->
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
            <p class="head-1">No of Users</p>
            <p class="number"><?php echo $U_count;?></p>
            <!-- <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Remaining</span></p> -->
            <i class="fa fas fa-users box-icon"></i>
        </div>
    </div>
    <div class="col-div-4-1">
        <div class="box">
            <p class="head-1">Storage Used</p>
            <p class="number"><?php echo $SpaceUsed?></p>
            <!-- <p class="percent" style="color:red!important"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> 50.64% <span>Remaining</span></p> -->
            <i class="fa fa-circle-o-notch box-icon"></i>
        </div>
    </div>

    
    <div class="clearfix"></div>
    <br/>


    <div class="clearfix"></div>
    <br/>
    <div class="col-div-12">
        <div class="box-8">
        <div class="content-box">
            <p>All Users <!-- <span>Sell All</span> --></p>
            <br/>
            <table id="myTable">
                <!-- Dynamic form with hidden user id -->
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Space Used</th>
    <th>Delete User</th>
  </tr>
                <?php
                foreach($users as $user){
                ?>
  <tr>
    <td><?php echo $user["username"];?></td>
    <td><?php echo $user["useremail"];?></td>
    <td><?php echo $user["Converted"];?></td>
    <td>
        <form action="./phpscripts/deleteUser.php" method="post">
            <input type="hidden" name="userIdtoDelete" value="<?php echo $user["id"];?>">
        <button class="fa fas fa-user-times icons" type="submit"></button>
        </form>
    </td>
  </tr>
  
  <?php }?>
</table>
        </div>
    </div>
    </div>

    
        
    <div class="clearfix"></div>
</div>
<script>
function SearchUser() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

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
    <div class="container" style="">
        <table>
            <tr>
                <td>
                    <div class="sidebar">


            <tr>
                <div class="logo">
                    <h1>
                        <a href="Index.php"><img src="Logo fessage.png" width="145" height="79"></a>
                    </h1>
                </div>
            </tr>
            <tr>
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
    </div>
    </tr>
    </td>

    <div class="main-content">
        <div class="header-bar">

            <span><img src="Images/Userprofile.png"></span>
            <span><img onclick="location .href='index.php'" src="Images/Logout.png"></span>

        </div>

    </div>
    <td>
        <tr>
            <td>
                <div class="search-user">
                    <span>
                        <img src="Images/Search.png" alt="Search Icon">
                        <input type="search-bar">
                    </span>
                    <div class="user-request">
                        <img src="Images/User2.png" alt="User Image icon">
                        Username
                        <img src="Images/Delete.png" alt="Delete User">
                        <img src="Images/VIP.png" alt="VIP or Not">
                    </div>
                    <div class="user-request">
                        <img src="Images/User2.png" alt="User Image icon">
                        Username
                        <img src="Images/Delete.png" alt="Delete User">
                        <img src="#" alt="Not">
                    </div>
                    <div class="user-request">
                        <img src="Images/User2.png" alt="User Image icon">
                        Username
                        <img src="Images/Delete.png" alt="Delete User">
                        <img src="Images/VIP.png" alt="VIP or Not">
                    </div>

                </div>
            </td>
            <td>
                <div class="User-count">
                    <img src="Images/User2.png" alt="Users-Icon">
                    <h1>7</h1>
                    <h3>No of Users</h3>
                </div>
            </td>
            <td>
                <div class="storage-bar">
                    <img src="Images/Circular-bar.png" alt="">
                    <p>10 Gb used by the users</p>
                </div>
            </td>
        </tr>

        <tr>
            <div class="add-user">
                <img src="#" alt="Copy invitaion link icon">
                <p>https://www.Fessage.com/invite</p>
            </div>
        </tr>
    </td>
    </tr>

    </table>


    </div>
    <button onclick="location. href = 'AdminDash.php'">Admin Home</button> -->
</body>

</html>