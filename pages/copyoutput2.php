<html>
	<head>
		<title>TPI</title>
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link type="" rel="shortcut icon" href="../images/screenshot_10.png"/>
		
	</head>
	
	<body>
	
		<div id="main" style="width:100%;">
			
			<div id="main1" style="width:100%;">
				<div id="main11" style="width:15%;">
					<img width="80%" height="135px" src="../images/screenshot_101.png"/>
				</div>
				<div id="main12" style="width:85%;">
					<p id="p1">Thakurgaon Polytechnic Institute</p>
					<a href="../index.php" style="width:100px; margin-left:50px;">Back</a>
					<p id="p3">
						Student Database For Thakurgaon Polytechnic Institute
					</p>
				</div>
				<div style="clear:both;">
				</div>
			</div>
			
			<div id="main2" style="width:100%; min-height:500px;">
				<div id="main21" style="width:100%; min-height:500px;">
					<center>
						<h1>Student Database</h1>
<?php

		$session=$_POST['session'];
		$saddam=mysql_connect("localhost","root","");
		mysql_selectdb("tpi",$saddam);
		$sabbir=mysql_query("select * from `tpi`.`student` where `session`='$session' order by technology asc,  roll_number asc ");
	
			echo"<table border=1, id=good>
					<tr>
						<th id=dus>Roll No</th>
						<th id=dus>Student's Name</th>
						<th id=dus>Father's Name</th>
						<th id=dus>Mother's Name</th>
						<th id=dus>Session</th>
						<th id=dus>Reg. No</th>
						<th id=dus>Technology</th>
						<th id=dus>Mobile</th>
						<th id=dus>E-mail</th>
						<th id=dus>Birthday</th>
						<th id=dus>Blood Group</th>
						<th id=dus>Village</th>
						<th id=dus>Post</th>
						<th id=dus>Thana</th>
						<th id=dus>Dis</th>
						<th id=dus>P_status</th>
						<th id=dus>Image</th>
						<th id=dus>View</th>
					</tr>
				";
				while($t=mysql_fetch_array($sabbir))
					{
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
						echo"<tr>";
								
								
								
							echo"<td id=dus1>".$roll."</td>";
							echo"<td id=dus2>".$name."</td>";
							echo"<td id=dus1>".$fname."</td>";
							echo"<td id=dus2>".$mname."</td>";
							echo"<td id=dus1>".$session."</td>";
							echo"<td id=dus2>".$reg."</td>";
							echo"<td id=dus1>".$tech."</td>";
							echo"<td id=dus2>".$mobile."</td>";
							echo"<td id=dus1>".$mail."</td>";
							echo"<td id=dus2>".$birth."</td>";
							echo"<td id=dus1>".$blood."</td>";
							echo"<td id=dus2>".$village."</td>";
							echo"<td id=dus1>".$post."</td>";
							echo"<td id=dus2>".$police."</td>";
							echo"<td id=dus1>".$district."</td>";
							echo"<td id=dus1>".$ps."</td>";
							echo"<td id=dus2><img src=upload/".$image." width=50px height=40px /></td>";
							echo"<td id=du1>"."<form action=pop1.php method=post>
								<input type=hidden name=pop value=$roll />
								<input type=submit value=View />
								</form>
								"."</td>";
						echo"</tr>";
					}
			echo"</table>";

?>


				<table style="position:relative; top:10px;"><tr><td><a href="../index.php" style="margin-top:100px; background:#17AD6D; padding:5px;color:blue;"><blink>Back</blink></a>
					<input type="button"  onclick="window.print();" value="Print"/></center></td></tr></table>
				</div>
								
				<div style="clear:both;">
				</div>
			</div>
			<div id="main3" style="width:100%;">
			</div>
			<div id="main4" style="width:100%;">
				<p>Copyright by &copy; T.P.I, All rights reserved.</p>
			</div>
			<div style="clear:both">
			</div>
			
		</div>
		<div style="clear:both;">
		</div>
		
	</body>
	
	
</html>