
<?php
include "header.php";
include "connect.php";


if(isset($_POST["btn"]))
{
	
$id=$_POST["sid"];
$n=$_POST["sname"];
$g=$_POST["sgen"];
$b=$_POST["sbrh"];
$s=$_POST["ssem"];
$c=$_POST["scon"];

$q="insert into std values($id,'$n','$g','$b',$s,$c)";
mysqli_query($conn,$q);

echo "<script>alert('Student Registered Successfully');</script>";

}
mysqli_close($conn);

?>

<html>
<head>
<link href="css/sstyle.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="box">
<center>
<h2 align="center">Student Registration</h2>

<form method="post" action="sreg.php">

  <table border="1" cellpadding="10" >
    <tr>
	     <td class="l">Enter Student Id</td>
		 <td><input class="ip" type="text" name="sid" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Student Name</td>
		 <td><input class="ip" type="text" name="sname" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Student Gender</td>
		 <td><input class="ip" type="text" name="sgen" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Student Branch</td>
		 <td><input class="ip" type="text" name="sbrh" autocomplete="off"></td>
	</tr>
	<tr>
	     <td class="l">Enter Student Sem</td>
		 <td><input class="ip" type="text" name="ssem" autocomplete="off"></td>
	</tr>
		<tr>
	     <td class="l">Enter Student Contact</td>
		 <td><input class="ip" type="text" name="scon" autocomplete="off"></td>
	</tr>
	 
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Submit" name="btn"></td>
	</tr>
	
  </table>

</form>
</center>
</div>
</body>