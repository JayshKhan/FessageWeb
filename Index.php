<!doctype html>
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
    <title> Landing page</title>
    <meta name="viewport" content="width=device-width, initial-scale=-1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="Css/index.css">
</head>

<body class="body">
	<div class="main">
	<div class="header">
			<div>
				<img class="logo" src="Logo fessage.png" width="145" height="79">
						<button class="button" style="margin-left: 90px;" type="button" onclick="location. href = './Signup.php'"><span></span>Signup</button>
						<button class="button" type="button" onclick="location. href = './Login.php'"><span></span>Login</button>
			</div>
			<div class="top">
			<img src="./Images/topsec-img.png" alt="cloud" style="margin-top: 200px;margin-left: 500px;">
				<h1>Fessage. A new home for your files</h1>
				<p>Register or Login now to upload, backup, manage and access your files<br> on any device, from anywhere, free.</p>
				<div>
			        <button class="headerbutton3" type="button" onclick="location. href = 'Signup.php'"><span></span>Register Now</button>
				</div>
			</div>
	</div>
	
<div class="middle">
	
		<table>
			<tr>
				<td class="coloum">
					<img src="Images/IndexImage1.png" alt ="Not found">
					<h3>Store any File</h3>
					<p>Keep photos, stories, designs, drawings, recordings, videos, and more. Your first 15 GB of storage are free.</p>
				</td>
				<td class="coloum">
					<img src="Images/IndexImage2.png"alt ="Not found">
					<h3>See your stuff anywhere</h3>
					<p>Your files in Fessage can be reached from any smartphone, tablet, or computer.</p>
				</td>
				<td class="coloum">
					<img src="Images/IndexImage3.png"alt ="Not found">
					<h3>Share files and folders</h3>
					<p>You can quickly invite others to view, download, and collaborate on all the files you want.</p>
				</td>
			</tr>
		</table>
	
</div>

<div class="footer">
	<footer style="padding-top:250px;">
		<div class="withLogo" style="position: inherit; padding-top: 50px;">
			<img class="logo" style="top: -20px; width:150px;height:80px; padding-top: 50px;" src="./Images/footerLogo.svg" width="145" height="79">
			<div class="rightside">
				<label for="footerbutton" style="top:-10px; padding-right: 50px; color: white;">Ready to get started?</label>
				<button class="button" id="footerbutton" style="background-color: rgb(153, 241, 167); width: 200px; padding: 0px; height: 60px; bottom: 116px !important; left: 81.8439% !important; top: -37.07% !important;" onclick="location. href = 'Signup.php'">Get Started</button>
			</div>

		</div>
	<!-- 	<br>
		<hr style="color:rgb(153, 241, 167) ;"> -->
		<div class="links" style="display:flex; position: relative; top: 99px; width: 90%;">
			
				<div class="information">
					<ul>
						<li><label for="email">Subscribe to our newsletter</label></li>
						<li><input type="email" name="newsEmail" id="email" placeholder="Your Email"></li>
					</ul>
					
				</div>
				<div class="information">
					<h4>Services</h4>
						<ul>
							<li><a href="#">Email Marketing</a></li>
							<li><a href="#">Campaigns</a></li>
							<li><a href="#">Branding</a></li>
							<li><a href="#">Offline</a></li>
						</ul>
				</div>
				<div class="information">
					<h4>About</h4>
						<ul>
							<li><a href="#">Our Story</a></li>
							<li><a href="#">Benefits</a></li>
							<li><a href="#">Team</a></li>
							<li><a href="#">Career</a></li>
						</ul>
					</div>
				<div class="information">
					<h4>Help</h4>
					<ul>
						<li><a href="Faqs.php">FAQs</a></li>
						<li><a href="ContactUs.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="information">
					<h4>Others</h4>
					<ul>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="AdminDash.php">Admin Login</a></li>
					</ul>
				</div>
		</div>
	</footer>  
	</div> 
</div>
</body>
</html>