<!Doctype HTML>
<html>
<head>
	<title></title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K5552TCGLY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K5552TCGLY');
</script>
	<link rel="stylesheet" href="Css/Dash.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        window.onload = function() {
            let j = document.getElementById("fileIID").value;
            document.getElementById("myInput").value="http://fessage.live/SharedFile.php?fileID="+j;
        };
    </script>
    <script type="Text/Javascript">
        function openUpload() {
            $('#foruploadfile').load('./Uploadfile.php', function () {
                $('#popUpdiv').show();
            });
            //$('#main-content').hide();
        }
        </script>
    <script>
        function myCopyFunction()
        {
          var copyText = document.getElementById('myInput').value;
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          navigator.clipboard.writeText(copyText.value);
          alert("Copied the text: " + copyText.value);
        }
    </script>
	<?php
	    $fileID = $_GET['fileID'];
	?>
	<style>
    #FileTable tr > *:nth-child(1) {
    display: none;

}
video{
    float: left;top: 0px;position: relative;
  box-shadow: 2px 5px 10px #000;
  border-radius: 10px;
}
#FileTablee{
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
.button {
    position: absolute;
    left: 83.03%;
    right: 12.15%;
    top: 2.53%;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 40%;
    background: #0099FF;
    border-radius: 40px;
    border: none;
}
.center{
    margin-left: auto;
    margin-top: auto;
    margin-bottom: auto;
    margin-right: auto;
    text-align: center;
    background: #E5E5E5;
    position: relative;
    height: auto;
}
  </style>

</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><img src="Logo fessage.png" width="145" height="79"><span class="menu">&#9776;</span></p>
	<p class="logo1"> <span class="menu1">&#9776;</span></p>
  <a href="Login.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="Login.php" class="icon-a"><i class="fa fa-upload icons"></i> &nbsp;&nbsp;Upload Files</a>
  <a href="Login.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Settings</a>


</div>
<input type="hidden" name="fileIID" id="fileIID" value="<?php echo $fileID?>">


	<div class="main">
			<div>
				<img class="logo" src="Logo fessage.png" width="145" height="79">
						<button class="button" style="margin-left: 90px;" type="button" onclick="location. href = './Signup.php'"><span></span>Signup</button>
						<button class="button" type="button" onclick="location. href = './Login.php'"><span></span>Login</button>
			</div>
</div>
<div class="center">
    <input  type="text" value="Hello World" id="myInput" style="width: 150px;">
    <button id="userdashbutton" onclick="myCopyFunction()">Copy text</button>
	<div class="clearfix"></div>
    <table id="FileTablee" style="width: 300px;">
    <thead>
    <th></th>
    <th>Name</th>
    <th>owner</th>
    <th>Size</th>
    <th>type</th>
    <th>Download</th>
  </thead>
    <?php
    $servername = "localhost";
    $username = "u458723640_fss";
    $password = "Jayshkhan@123";
    $dbname = "u458723640_fss";

    $conn = new mysqli($servername, $username, $password,$dbname);

    include("./phpscripts/UserCounter.php");
    $sql = "Select * from files where id='$fileID'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $location = $row["location"];
        $size = UnitConverter($row["fileSize"]);
        $link = "localhost/public_html/" . $location;
        $fileType = $row["fileType"];
        $html = 'none';
        if (str_contains($fileType, "application")) {
            if (str_contains($fileType, "pdf")) {
                $html = '<iframe id="displayfile" src="' . $location . '" height="200" width="500"></iframe>';
            } else {
                $html = '<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
<img id="displaynotfoundfile" src="./Images/zipfileUserDash.svg" alt="Cannot Preview" width="100" height="100">
  <h2 style="float: right;margin-top: 40px;"><a href="' . $location . '" target="_blank">' . $row["fileName"] . '</a></h2>
</div>';
            }

        } else if (str_contains($fileType, "video")) {
            if (str_contains($fileType, "video/mp4")) {
                $html = ' <video  width="400" controls="controls" preload="metadata" >
                         <source src="' . $location . '" type="video/mp4">
                          </video>';
            } else {
                $html = '<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
<img id="displaynotfoundfile" src="./Images/fileIconUserDash.svg" alt="Cannot Preview" width="100" height="100">
  <h2 style="float: right;margin-top: 40px;"><a href="' . $location . '" target="_blank">' . $row["fileName"] . '</a></h2>
</div>';
            }
        } else if (str_contains($fileType, "image")) {
            $html = '<img id="displayfile" src="' . $location . '" alt="Cannot Preview" width="400" height="400">';
        } else if (str_contains($fileType, "text/plain")) {
            $html = '<iframe id="displayfile" src="' . $location . '"></iframe>';
        }

        echo "<tr>";
        echo " <td>" . $html . "</td>";
        echo "<td>" . $row["fileName"] . "</td>";
        echo "<td>Me</td>";
        echo "<td>" . $size . "</td>";
        echo "<td>" . $row["fileType"] . "</td>";
        echo "<td><a href='$location' download><button id='userdashbutton'>Download</button></a></td>";

        echo " </tr>";
    }
        }
    
    ?>
   
</div>
</div>


</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the text: " + copyText.value);
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
