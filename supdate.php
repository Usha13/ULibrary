<?php
include "header.php";

$id= $_SESSION["sid"];
	
include "connect.php";

$q = "select * from std where sid = $id";
$rs= mysqli_query($conn,$q);
		 
while($r=mysqli_fetch_array($rs))
{
	$sd=$r[0];
	$snm=$r[1];
	$sgn=$r[2];
	$sbch=$r[3];
	$ssm=$r[4];
	$scnt=$r[5];
}

if(isset($_POST["btn"]))
{
	$a=$_POST["sid"];
	$b=$_POST["sname"];
	$c=$_POST["sgen"];
	$d=$_POST["sbrh"];
	$e=$_POST["ssem"];
	$f=$_POST["scon"];
	
$q = "update std set sid=$a, sname='$b',sgender='$c',
         sbranch='$d',ssem=$e,scontact=$f where sid =$id ";

$rs=mysqli_query($conn,$q);

if($rs)
{
	?>
	<script>
	alert("Student Data Updated Successfully");
	window.open("ssearch.php","_self");
	</script>
	<?php
}

	
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
<h2>Student Information</h2>
<form method="post" action="supdate.php">

  <table border="1" cellpadding="10" >
  
    
    <tr>
	     <th class="l">Student Id</th>
		 <td><input class="ip" type="text" name="sid" value="<?php echo $sd; ?>" autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Student Name</th>
		 <td><input class="ip" type="text" name="sname" value="<?php echo $snm; ?>" autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Student Gender</th>
		 <td><input class="ip" type="text" name="sgen" value="<?php echo $sgn; ?>" autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Student Branch</th>
		 <td><input class="ip" type="text" name="sbrh" value="<?php echo $sbch; ?>" autocomplete="off"></td>
	</tr>
	<tr>
	     <th class="l">Student Sem</th>
		 <td><input class="ip" type="text" name="ssem" value="<?php echo $ssm; ?>" autocomplete="off"></td>
	</tr>
		<tr>
	     <th class="l">Student Contact</th>
		 <td><input class="ip" type="text" name="scon" value="<?php echo $scnt; ?>" autocomplete="off"></td>
	</tr>
	 
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Update" name="btn"></td>
	</tr>
	
  </table>

</form>
</center>
</div>
</body>