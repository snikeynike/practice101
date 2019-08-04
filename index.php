<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$strDisplay="This is from variable.";
$x=5;
$y=3;
$sum=$x+$y;
$temp=27;
/*echo "Hello world!!.."."<br>".$strDisplay."<br>";
echo "The sum is: $sum<br>";*/

if($temp >= 25 && $temp <= 29)
	{
	echo "It's Hot!";
	}
	else if($temp >=30 )
	{
	echo "It's Super HOT!";
	}
	else
	{
	echo "It's cold.";	
	}
	
$cars = array("Toyota","Ford","Mitsubishi");
$arrSpan = count($cars);
$num = 1;	
	for ($a = 0;$a < $arrSpan; $a++)
	{		
		echo "<br>Car number $num".": $cars[$a]<br>";
		$num = $num + 1;
	}
?>
</body>
</html>