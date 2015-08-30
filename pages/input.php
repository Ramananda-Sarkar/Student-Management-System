<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: ../index.php');
}
?>
<?php
if(isset($_POST["sad"]))
{
$photo_name= $_FILES["file"]["name"];
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/png"))
   && ($_FILES["file"]["size"] < 20000000))
                {
			if (file_exists("upload/" . $_FILES["file"]["name"]))
    	  	{
   			   echo "<center><h1>".$_FILES["file"]["name"] . " -Data store but image already exists. </h1></center>";
      		}
   	        else
      		{
      			move_uploaded_file($_FILES["file"]["tmp_name"],
    			  "upload/" . $_FILES["file"]["name"]);
    			 // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
			}
  
 	   }
     else
  		{
 			 echo "";
  		}
?> 
<?php

	$roll=$_POST['roll'];
	$reg=$_POST['reg'];
	$name=$_POST['name'];
	$tech=$_POST['tech'];
	$session=$_POST['session'];
	$birth=$_POST['birth'];
	$village=$_POST['village'];
	$police=$_POST['police'];
	
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$blood=$_POST['blood'];
	$post=$_POST['post'];
	$district=$_POST['district'];
	$present=$_POST['ps'];
	

	if
		($roll=="")

	{
		echo "";

	}
	else if
		($roll=="" || $reg=="" || $name=="" || $tech=="" || $session=="" || $fname=="" ||
		$mname=="" || $mobile==""  || $photo_name=="" 
		)

	{
		echo "<h3><blink>Data not stored. Please Input All The Red Star Text Box Correctly</blink></h3>";

	}
else
	{
	$sad=mysql_connect("localhost","root","");
	mysql_select_db("tpi",$sad);
	$sadda="INSERT INTO `student` 
		(
			`roll_number` ,
			`reg_number` ,
			`st_name` ,
			`fa_name` ,
			`mo_name` ,
			`technology` ,
			`session` ,
			`contact_number` ,
			`e_mail` ,
			`birth` ,
			`blood` ,
			`village` ,
			`post_office` ,
			`police_station` ,
			`district` ,
			`p_status` ,
			`image` 
		)
		VALUES (
		'$roll', '$reg', '$name', '$fname', '$mname', '$tech',
		'$session', '$mobile', '$email', '$birth','$blood', '$village', '$post',
		'$police', '$district','$present', '$photo_name'
		);
		";

	 mysql_query($sadda,$sad);
	}

}
else{ $total="unknown";}
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
							<form action="" method="post" enctype="multipart/form-data">
								<div id="input1">
									<div id="in">
										<div id="in1">
											Roll Number: <span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="roll" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Registration Number:<span style="color:#FF0000;"> * </span>
										</div>
										<div id="in2">
											<input type="text" name="reg" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Student's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="name" />
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
												<option></option>
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
											<input type="text" name="session" placeholder="Ex. 2008-09" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Date Of Birth:
										</div>
										<div id="in2">
											<input type="text" name="birth" placeholder="Ex. 21-02-1952" />
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
											<input type="text" name="village" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Police Station:
										</div>
										<div id="in2">
											<input type="text" name="police" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Present Status :
										</div>
										<div id="in2">
											<input type="text" name="ps" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div style="clear:both">
									</div>
								</div>
								<div id="input1" style="padding-left:50px; width:400">
									<div id="in">
										<div id="in1">
											Image:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="file" name="file" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Father's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="fname" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Mother's Name:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="mname" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Contact Number:<span style="color:#FF0000;"> *** </span>
										</div>
										<div id="in2">
											<input type="text" name="mobile" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											E-mail:
										</div>
										<div id="in2">
											<input type="text" name="email" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									<div id="in">
										<div id="in1">
											Blood Group:
										</div>
										<div id="in2">
											<input type="text" name="blood" />
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
											<input type="text" name="post" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="in">
										<div id="in1">
											District:
										</div>
										<div id="in2">
											<input type="text" name="district" />
										</div>
										<div style="clear:both">
										</div>
									</div>
									
									<div id="in" style="border-bottom:0px;margin-top:20px;">
										
											<input type="submit" value="Submit" name="sad"style="width:100px;height:30px;"/>
											<input type="reset" value="Reset" style="width:100px;height:30px;"/>
										
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