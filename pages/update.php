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
	$sabbir=mysql_query("select * from `tpi`.`student` where roll_number='$up'");
	$t=mysql_fetch_array($sabbir);
	
	$roll=$t['roll_number'];
	$reg=$t['reg_number'];
	$name=$t['st_name'];
	$fname=$t['fa_name'];
	$mname=$t['mo_name'];
	$tech=$t['technology'];
	$session=$t['session'];
	$mobile=$t['contact_number'];
	$mail=$t['e_mail'];
	$birth=$t['birth'];
	$blood=$t['blood'];
	$village=$t['village'];
	$post=$t['post_office'];
	$police=$t['police_station'];
	$district=$t['district'];
	$ps=$t['p_status'];
	$image=$t['image'];
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
						
						<li><a href="adminpage.php" style="width:100px; margin-left:20px;">Admin Page</a></li>
						<li><a href="logout.php" style="width:100px; margin-left:20px;">Log Out</a></li>
					</ul>
					<p id="p3" style="width:350px;">
						Student Database For Thakurgaon Polytechnic Institute
					</p>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main2">
				<div id="main21" style="width:890px; ">
					<center>
						<div id="search" style="width:850px; margin:0px auto; ">
							<h1>Student Information Form</h1>
							<form action="save.php" method="post" enctype="multipart/form-data">
								<div id="input1">
									<div id="in">
										<div id="in1">
											Roll Number: <span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="roll" value="<?php echo $roll; ?>" />
											<input type="hidden" name="important" value="<?php echo $roll; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Registration Number:<span style="color:#FF0000;"> * </span>
										</div>
										<div id="in2">
											<input type="text" name="reg" value="<?php echo $reg; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Student's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="name" value="<?php echo $name; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Technology:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<select style="width:100%; text-align:center;" name="tech">
												<option><?php echo $tech; ?></option>
												<option>A.I.D.T</option>
												<option>Computer</option>
												<option>Food</option>
												<option>R.A.C</option>
											</select>
										</div>
										
										
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Session:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" value="<?php echo $session; ?>"name="session" placeholder="Ex. 2008-09" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Date Of Birth:
										</div>
										<div id="in2">
											<input type="text" value="<?php echo $birth; ?>"name="birth" placeholder="Ex. 21-02-1952" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="in" style="border-bottom:0px;">
										<div id="in1">
											Address
										</div>
										
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Village / Para:
										</div>
										<div id="in2">
											<input type="text" name="village" value="<?php echo $village; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Police Station:
										</div>
										<div id="in2">
											<input type="text" name="police" value="<?php echo $police; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Present Status:
										</div>
										<div id="in2">
											<input type="text" name="pst" value="<?php echo $ps; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div style="clear:both">
									</div>
								</div>
								<div id="input1" style="padding-left:50px; width:400">
									
									<div id="in">
										<!--<div id="in1">
											Image:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="file" name="file" />
										</div>
										<div style="clear:both">
										</div>-->
									</div>
									<div id="in">
										<div id="in1">
											Father's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="fname" value="<?php echo $fname; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Mother's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="mname" value="<?php echo $mname; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Contact Number:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="mobile" value="<?php echo $mobile; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											E-mail:
										</div>
										<div id="in2">
											<input type="text" name="email" value="<?php echo $mail; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Blood Group:
										</div>
										<div id="in2">
											<input type="text" name="blood"value="<?php echo $blood; ?>" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in" style="border-bottom:0px;">
										
										
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Post Office:
										</div>
										<div id="in2">
											<input type="text" name="post" value="<?php echo $post; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											District:
										</div>
										<div id="in2">
											<input type="text" name="district" value="<?php echo $district; ?>"/>
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in" style="border-bottom:0px;margin-top:20px;">
										
											<input type="submit" value="Submit" name="sad"style="width:100px;height:30px;"/>
											<!--<input type="button" value="Back" onclick="history.go(-1)"style="width:100px;height:30px;"/>-->
											
										
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