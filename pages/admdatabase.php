<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
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
				<div id="main12">
					<p id="p1">Thakurgaon Polytechnic Institute</p>
					<ul>
						<li><a href="adminpage.php" style="width:100px; margin-left:50px;">Back</a></li>
						<li><a href="logout.php" style="width:100px; margin-left:50px;">Log Out</a></li>
					</ul>
					<p id="p3">
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
<?php

		
		$saddam=mysql_connect("localhost","root","");
		mysql_selectdb("tpi",$saddam);
		$sabbir=mysql_query("select * from `tpi`.`admin` ");
	
			echo"<table border=1, id=good>
					<tr>
						<th id=dus>User Name</th>
						<th id=dus>Password</th>
						<th id=dus>Edit</th>
						<th id=dus>Delete</th>
					</tr>
				";
				while($t=mysql_fetch_array($sabbir))
					{
							$user=$t['user'];
							$pass=$t['password'];
						echo"<tr>";
								
								
								
							echo"<td id=dus1>".$user."</td>";
							echo"<td id=dus2>".$pass."</td>";
							echo"<td id=dus1>"."<form action=admupdate.php method=post>
								<input type=hidden name=uu value=$pass />
								<input type=submit value=Edit />
								</form>
								"."</td>";
							echo"<td id=dus1>"."<form action=delete2.php method=post>
								<input type=hidden name=del value=$pass />
								<input type=submit value=Delete />
								</form>
								"."</td>";
							
						echo"</tr>";
					}
			echo"</table>";

?>
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