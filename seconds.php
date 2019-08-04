<?php
$val="<div id=sec></div>";
 echo $val;
?>

<script> 
var t=new Date();
//var sec=t.getSeconds();
document.getElementById("sec").innerHTML = t.getSeconds();
//$('#sec').html(sec);
	</script>