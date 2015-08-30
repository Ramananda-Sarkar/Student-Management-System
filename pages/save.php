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
//$photo_name= $_FILES["file"]["name"];
//if ((($_FILES["file"]["type"] == "image/gif")
   // || ($_FILES["file"]["type"] == "image/jpeg")
     //           || ($_FILES["file"]["type"] == "image/pjpeg")
	//			|| ($_FILES["file"]["type"] == "image/png"))
  // && ($_FILES["file"]["size"] < 20000000))
       //         {
		//	if (file_exists("upload/" . $_FILES["file"]["name"]))
    	//  	{
   			  // echo $_FILES["file"]["name"] . " already exists. ";
      	//	}
   	    //    else
      		//{
      		//	move_uploaded_file($_FILES["file"]["tmp_name"],
    		//	  "upload/" . $_FILES["file"]["name"]);
    			 // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		//	}
  
 	  // }
   // else
  		//{
 		//	 echo "";
  		//}
?> 


<?php

	$upvalue=$_POST['important'];
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
	$pas=$_POST['pst'];
	
	$p=mysql_connect("localhost","root","");
	mysql_select_db("tpi",$p);
	$d=mysql_query("update `tpi`.`student` set
			roll_number='$roll' ,
			reg_number='$reg' ,
			st_name='$name' ,
			fa_name='$fname' ,
			mo_name='$mname' ,
			technology='$tech' ,
			session='$session' ,
			contact_number='$mobile' ,
			e_mail='$email' ,
			birth='$birth' ,
			blood ='$blood',
			village='$village' ,
			post_office='$post' ,
			police_station='$police' ,
			district='$district' ,
			p_status='$pas'
		where roll_number='$upvalue' ");	 
	

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
						
						<li><a href="adminpage.php" style="width:100px; margin-left:25px;">Admin Page</a></li>
						<li><a href="logout.php" style="width:100px; margin-left:25px;">Log Out</a></li>
					</ul>
					<p id="p3" style="width:350px;">
						Student Database For Thakurgaon Polytechnic Institute
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