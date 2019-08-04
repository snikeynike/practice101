<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title>YellowFlash</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" /> 
<link rel="stylesheet" type="text/css" href="nikeStyle.css" media="all" />
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="backHeader">
<div class="mainHeader"> 
<img class="logo" src="img/download.gif"/>
<table class="time">
    <tbody>
      <tr>
        <td><div id="hours"></div></td>
        <td>:</td>
        <td><div id="min"></div></td>
        <td>:</td>
        <td><div id="sec"></div></td>
      </tr>
    </tbody>
  </table>

</div>
</div>
<div class="subheader">
<table class="menu">
<tr>
<td class="menu"><a class="menulink" href="">Home</a></td>
<td class="menu"><a class="menulink" href="">Naruto</a></td>
<td class="menu"><a class="menulink" href="">Images</a></td>
<td class="menu" style=""><a class="menulink" href="">Entertainment</a></td>
</tr>
</table>
</div>

<div class="innerbox">
<div class="container">
<div class="row">
  <div class="col-md-4 table-bordered">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label>Name:</label>
	<input type="text" name="fname" />
    <select name="lname">
    <option value="nicor">nicor</option>
    <option value="dionela">dionela</option>
    </select>
    
    <input type="submit" />  
  </form>
  </div>
  </div>
  </div>
  <div class="container table-bordered">
  <div class="row table-bordered">
  <div class="col-md-7 col-sm-7 col-xs-7">
  <h1 class="text-center">KNIGHK</h1>
  </div>
  <div class="col-md-5 col-sm-5 col-xs-5">
  <form>
  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
    <input class="form-control input-lg" type="text" name="text1.1" placeholder="Small iput height" />
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
    <input class="form-control input-lg" type="text" name="text1.2" placeholder="Small iput height" />
    </div>
    </div>

    </div>
    <div class="form-group">
    <input class="form-control input-lg" type="text" name="text2" placeholder="Default input height" />
    </div>
    <div class="form-group">
    <input class="form-control input-lg" type="text" name="txt3" placeholder="Large input" />
    </div>
    
    <input type="radio" name="rad" value="1"/>
    <input type="radio" name="rad2" value="2"/>
  </form>
    </div>
    </div>
    </div>
<?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
	  $name=$_REQUEST['lname'];
	  if (empty($name)){
		  echo "name is empty";
		  }else{
			  echo $name;
			  }
	  }
 ?>
  <script type="text/javascript">	  
  //var t=new Date();
 //document.getElementById("time").innerHTML = t;

 autoRef();
 autoRef2();
 autoRef3();
 var x=0;
function autoRef()
 { 
  $.post('seconds.php',
  function(data)
  {
	$('#sec').html(data);
	autoRef();  
  });
  }

function autoRef2()
 { 
  $.post('minutes.php',
  function(data)
  {
	$('#min').html(data);
	autoRef2();
  });
  }

function autoRef3()
 { 
  $.post('hours.php',
  function(data)
  {
	$('#hours').html(data);
	autoRef3();
  });
  }


  </script>
  
</div>

<!--<div class="footer"></div>-->

</body>
</html>
