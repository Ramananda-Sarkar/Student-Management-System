<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
}
?>
<?php

	$upvalue=$_POST['important'];
	$pass=$_POST['roll'];
	$user=$_POST['uname'];
	

	$p=mysql_connect("localhost","root","");
	mysql_select_db("tpi",$p);
	$d=mysql_query("update `tpi`.`admin` set
			user='$user' ,
			password=('$pass' )
		
		where password='$upvalue' ");	 
	

?>

<html>
	<head>
		<title>TPI</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link type="" rel="shortcut icon" href="../images/screenshot_101.png"/>
		
	</head>
	
	<body>
	
		<div id="main">
			
			<div id="main1">
				<div id="main11">
					<img width="80%" height="135px" src="../images/screenshot_101.png"/>
				</div>
				<div id="main12">
					<p id="p1">Thakurgaon Polytechnic Institute</p>
					<ul>
						
						<li><a href="adminpage.php" style="width:100px; margin-left:20px;">Admin Page</a></li>
						<li><a href="logout.php" style="width:100px; margin-left:20px;">Log Out</a></li>
					</ul>
					<p id="p3" style="width:350px;">
						Admin Database For Thakurgaon Polytechnic Institute
					</p>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main2">
				<div id="main21">
					<center>
						<div id="search">
							<h2 style="color:red;">Data has been edited successfully.</h2>
							
						</div>
				
					</center>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main3">
				
			</div>
			
			<div id="main4">
				<p>Copyright by &copy; T.P.I, All rights reserved.</p>
			</div>
			<div style="clear:both">
			</div>
			
		</div>
		<div style="clear:both;">
		</div>
		
	</body>
	
	
</html>