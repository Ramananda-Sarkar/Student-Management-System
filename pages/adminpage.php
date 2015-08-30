<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}

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
				<div id="main12" style="height:135px;">
					<p id="p1">Thakurgaon Polytechnic Institute</p>
					<ul >
						<li style=""><a href="#" style="width:100px; margin-left:50px;">Admin</a>
							<ul>
								<li><a href=" adminput.php" >Entry Admin</a></li>
								<li><a href="admdatabase.php" style="margin-top:2px;">Database</a></li>
							</ul>
						</li>
						<li><a href="#" style="width:100px; margin-left:50px;">Student</a>
							<ul>
								<li><a href=" input.php" >Entry Data</a></li>
								<li><a href=" database.php" style="margin-top:2px;">Database</a></li>
							</ul>
						</li>
						<!--<li><a href="result.php" style="width:100px; margin-left:50px;">Result</a></li>-->
						<li><a href="../index.php" style="width:100px; margin-left:50px;">Log Out</a></li>
					</ul>
				
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main2">
				<div id="main21">
					<center>
						<div id="search">
							<div id="search1">
								<form action="output1.php" method="post">
									<div id="sea1" style="text-align:left; padding-left:10px;">	
										Enter Your Roll:
									</div>
									<div id="sea1">	
										<input type="text" name="roll" placeholder="Ex. 910040"/>
									</div>
									<div id="sea2">	
										<input type="submit" value="Submit"/>
									</div>
									<div style="clear:both">
									</div>
								</form>
							</div>
							<div id="search1">
								<form action="output2.php" method="post">
									<div id="sea1" style="text-align:left; padding-left:10px;">	
										Enter Your Session:
									</div>
									<div id="sea1">	
										<input type="text" name="session" placeholder="Ex. 2008-09"/>
									</div>
									<div id="sea2">	
										<input type="submit" value="Submit"/>
									</div>
									<div style="clear:both">
									</div>
								</form>
							</div>
							<div id="search1">
								<form action="output3.php" method="post">
									<div id="sea1" style="text-align:left; padding-left:10px;">	
										Enter Your  Technology:
									</div>
									<div id="sea1">	
										<select id="select"style="color:black" name="tech">
											<option></option>
											<option>A.I.D.T</option>
											<option>Computer</option>
											<option>Food</option>
											<option>R.A.C</option>
										</select>
									</div>
									<div id="sea2">	
										<input type="submit" value="Submit"/>
									</div>
									<div style="clear:both">
									</div>
								</form>
							</div>
							<div id="search1">
								<form action="output4.php" method="post">
									<div id="sea1" style="text-align:left; padding-left:10px;">	
										Enter Session & Tech.
									</div>
									<div class="lll">
										<input size="9" type="text" name="sess" placeholder="Ex. 2008-09"/>
									
										*<select  style="color:black" name="tech">
											<option></option>
											<option>A.I.D.T</option>
											<option>Computer</option>
											<option>Food</option>
											<option>R.A.C</option>
										</select>
									</div>
									<div id="sea2">	
										<input type="submit" value="Submit"/>
									</div>
									<div style="clear:both">
									</div>
								</form>
							</div>
							<div style="clear:both">
							</div>
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