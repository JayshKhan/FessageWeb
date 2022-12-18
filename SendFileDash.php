<!Doctype HTML>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K5552TCGLY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K5552TCGLY');
</script>
	<title></title>
	<link rel="stylesheet" href="Css/Dash.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="Text/Javascript">
        function openUpload() {
            $('#foruploadfile').load('./Uploadfile.php', function () {
                $('#popUpdiv').show();
            });
            //$('#main-content').hide();
        }
    </script>
	<?php
	include("./phpscripts/GetProfileImage.php");
	$ProImageLoc = $_SESSION["profilepic"];
	include("./phpscripts/UserCounter.php");
  if(isset($_POST['fileidtobesent']))
  {
    $_SESSION['FTSI'] = $_POST['fileidtobesent'];
    $_SESSION['FTSN'] = $_POST['fileNametobesent'];
  }
    $fileTOSendID =  $_SESSION['FTSI'];
    $fileTOSendName = $_SESSION['FTSN'];
    $email = $_SESSION["useremail"];
    $Name = $_SESSION['username'];
    $id=$_SESSION['id'];

    $toID = 0;
	?>
	<style>
    #FileTable tr > *:nth-child(1) {
    display: none;

}
video,#displayfile{
  float: left;top: 0px;position: relative;left: 320px;
  box-shadow: 2px 5px 10px #000;
  border-radius: 10px;
}
tr:hover {background-color: skyblue;}
#userdashbutton {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
}
  </style>

</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><img src="Logo fessage.png" width="145" height="79"><span class="menu">&#9776;</span></p>
	<p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="UserDash.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a onclick="openUpload()" class="icon-a"><i class="fa fa-upload icons"></i> &nbsp;&nbsp;Upload Files</a>
  <a href="UserSetting.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Settings</a>

<!--   <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
  <a href="#"class="icon-a"><i class="fa fa-bell icons"></i> &nbsp;&nbsp;Notification</a>
  <a href="#"class="icon-a"><i class="fa fa-circle icons"></i> &nbsp;&nbsp;Icons</a>
 -->

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<p class="nav"> Dashboard</p>

</div>
	
	<div class="col-div-6">
		<input type="search-bar" name="Search" id="myInput" onkeyup="SearchUser()" placeholder="Search Files"  class="fa fa-search search-icon"> 

	<div class="profile">

		<img src="<?php echo $ProImageLoc?>" class="pro-img" />
		<p><?php echo $Name?><i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
		<div class="profile-div">
			<p><a href="./UserSetting.php"><i class="fa fa-cogs"></i> &nbsp;&nbsp;Settings</a></p>
			<p><a href="./phpscripts/logout.php"><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</a></p>
		</div>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	<div id="foruploadfile">
	<div class="col-div-4-2" id="ShowHere">
	
	</div>

	
	<div class="clearfix"></div>
	<br/>
	<div class="col-div-12" >
		<div class="box-8">
		<div class="content-box">
			<p>All Files </p>
			<br/>
			<table id="FileTable">
    <thead>
    <th></th>
    <th>Name</th>
    <th>Send</th>
  </thead>
        <?php include('./phpscripts/userTableCreator.php')?>

  
</table>
		</div>
	</div>
	</div>

	
		
	<div class="clearfix"></div>
</div>

</div>
<script>
function SearchUser() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("FileTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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
  var table=document.getElementById('FileTable'),rIndex;
  for(var i=0;i<table.rows.length;i++)
  {
    table.rows[i].onclick = function()
    {
      rIndex = this.rowIndex;
      document.getElementById("ShowHere").innerHTML=this.cells[0].innerHTML;
      
    };

  }
</script>
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

  $(window).load(function(){
    $('#exampleModal').modal('show');
});

  
});
</script>
</body>


</html>
