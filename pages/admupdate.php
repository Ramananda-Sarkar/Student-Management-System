<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
}
?>
<?php
	$up=$_POST['uu'];
	$p=mysql_connect("localhost","root","");
	mysql_select_db("tpi",$p);
	$sabbir=mysql_query("select * from `tpi`.`admin` where password='$up'");
	$t=mysql_fetch_array($sabbir);
	
	$roll=$t['user'];
	$reg=$t['password'];
?>
			<!--******************************-->

<!-- ******************-->

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
						<li><a href="admdatabase.php" style="width:100px; margin-left:20px;">Back</a></li>
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
				<div id="main21" style="width:890px; height:350px;">
					<center>
						<div id="search" style="width:850px; margin:0px auto; height:350px; ">
							<h1>Admin Information Form</h1>
							<form action="save2.php" method="post" enctype="multipart/form-data">
								<div id="input1" style="min-height:150px; margin-top:50px;">
									<div id="in">
										<div id="in1">
											User Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="uname" value="<?php echo $roll; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									
									<div style="clear:both">
									</div>
								</div>
								<div id="input1" style="padding-left:50px; width:400;margin-top:50px; min-height:150px;">
									
									<div id="in">
										<div id="in1">
											password: <span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="roll" value="<?php echo $reg; ?>" />
											<input type="hidden" name="important" value="<?php echo $reg; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="in" style="border-bottom:0px;margin-top:20px;">
										
											<input type="submit" value="Submit" name="sad"style="width:100px;height:30px;"/>
											
										
									</div>
									
									<div style="clear:both">
									</div>
								</div>
								<div style="clear:both">
								</div>
							</form>
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