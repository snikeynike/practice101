<?php
$conn=mysqli_connect('localhost','root','sql','fishbook');

if(mysqli_connect_error())
	{
	die("Database connection failed: ".mysqli_connect_error());
	}

 ?>