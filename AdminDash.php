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

    
    <div class="clearfix"></div>
    <br/>

    

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


</body>

</html>