<?php
require("connection.php");

if(isset($_POST['post']))
	{		 
		 $fname=mysqli_real_escape_string($conn,$_POST['postFname']);
		 $lname=mysqli_real_escape_string($conn,$_POST['postLname']);
		 $mnumber=mysqli_real_escape_string($conn,$_POST['postMobemail']);
		 $password=mysqli_real_escape_string($conn,$_POST['postPassword']);
		 $month=mysqli_real_escape_string($conn,$_POST['postMonth']);
		 $day=mysqli_real_escape_string($conn,$_POST['postDay']);
		 $year=mysqli_real_escape_string($conn,$_POST['postYear']);
		 $bday="$month "."$day".","."$year";
		 $gender=mysqli_real_escape_string($conn,$_POST['postGender']);
		
		$sql="insert into tbl_user (fname, lname, mnumber, password, bday, sex) values ('$fname', '$lname', '$mnumber', '$password', '$bday', '$gender')";	
		
		if(mysqli_query($conn,$sql))
			{ 
			echo "<div class='alert alert-success'> New record created successfully</div>";			
			}
		else
			{
					
			echo "<div class='alert alert-warning'> <strong>Error:</strong> " . $sql . "<br>" . mysqli_error($conn) . "</div>";	
					
			}
			
		mysqli_close($conn);
	}
	
 ?>
