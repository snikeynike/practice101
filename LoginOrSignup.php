<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title>Fishbook</title>
<link rel="stylesheet" type="text/css" href="nikeStyle.css" media="all" >
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
</head>

<body class="bbackground">

<script>
/*
-Execute insertion into tbl_user.
-The sql query will be found on registration.php
*/
function PostRegister() { 
 var fname=$('#txtfname').val();
 var lname=$('#txtlname').val();
 var mobemail=$('#txtmobemail').val();
 var password=$('#txtpass').val();
 var month=$('#selmonth').val();
 var day=$('#selday').val();
 var year=$('#selyear').val();
 var gender=$('#radgender:checked').val();
  
  $.post('registration.php',
  	{
	  	postFname:fname,
		postLname:lname,
		postMobemail:mobemail,
		postPassword:password,
		postMonth:month,
		postDay:day,
		postYear:year,
		postGender:gender, 
  		post:1
	},
		
  	function(data)
  		{
  			//$('#regstatus').html(data);			
			$('#regstatus').append(data);				
  		}
  	);
  
}	

</script>

<div class="backHeader">
<div class="mainHeader">
<img class="logo" src="img/download.gif" />
<form class="login">
<table>
<tr>
<td><label>Email or Phone<br></label></td>
<td><label>Password<br></label></td>
</tr>
<tr>
<td><input class="login" type="text" name="email"></td>
<td><input class="login" type="text" name="pass"></td>
<td><input type="button" value="Login"></td>
</tr>
<tr>
<td></td>
<td><a class="login" href="">Forgot account?</a></td>
</tr>
</table>
</form>
</div>
</div><!--end of Header-->
<div class="register">
<h1><b>Create a New Account</b></h1>
<h4>It's free and always will be.</h4>

<form>
<table>
<tr>
<td>
<div class="form-group">
<input class="form-control input-lg" type="text" name="txtfname" placeholder="First name" id="txtfname"/>
</div>
</td>
<td>&nbsp;&nbsp;</td>
<td>
<div class="form-group">
<input class="form-control input-lg" type="text" name="txtlname" placeholder="Last name" id="txtlname"/>
</div>
</td>
</tr>
<tr>
<td colspan="3">
<div class="form-group">
<input class="form-control" type="text" name="txtmobemail" placeholder="Mobile number or email" id="txtmobemail"/>
</div>
</td>
</tr>
<tr>
<td colspan="3">
<div class="form-group">
<input class="form-control" type="text" name="txtpass" placeholder="New password" id="txtpass"/>
</div>
</td>
</tr>
<tr>
<td colspan="3">
<label>Birthday</label>
<br>
<select class="bday" name="selmonth" id="selmonth">
<option value="">Month</option>
<option value="january">Jan</option>
<option value="february" selected="selected">Feb</option>
</select>
<select class="bday" name="selday" id="selday">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
</select>
<select class="bday" name="selyear" id="selyear">
<option value="">Year</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
</select>
<a class="register" href="">Why do I need to provide my<br>Birthday?</a>
</td>
</tr>
<tr>
<td>
<p>
<label>
<input type="radio" name="radgender" value="Female" id="radgender" />
Female&nbsp;&nbsp;
</label>
<label>
<input type="radio" name="radgender" value="Male" id="radgender" />
Male
</label>

</p>
</td>
</tr>
<tr>
<td colspan="3">
<p class="terms">By clicking Sign Up, you agree to our <a class="terms" href="">Terms</a>, <a class="terms" href="">Data Policy</a> and<br> <a class="terms" href="">Cookies Policy</a>. You may receive SMS Notifications from us<br> and can opt out any time.</p>
</td>
</tr>
<tr>
<td>
<!--When clicking Sign Up button, the PostRegister() function of jquery will execute-->
<input type="button" id="signup" name="signup" value="Sign Up" onClick="PostRegister();" />
</td>
</tr>
<tr>
<td id="regstatus">
<!--Alert message will display here-->
</td>
</tr>
</table>

</form>

</div>

</body>
</html>