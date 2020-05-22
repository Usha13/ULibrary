<?php
include "header.php";

if(isset($_POST["btn"]))
{
	$a= $_POST["sid"];
	$b= $_POST["bid"];
	$c= $_POST["idate"];
	$d= $_POST["sdate"];
	$f1=0;
	$f2=0;
	$st=0;
	include "connect.php";
	if($a)
	{
	$q3 = "select * from std where sid = $a";
	$rs1 = mysqli_query($conn,$q3);
	
	while($r1=mysqli_fetch_array($rs1))
	{
		$f1=1;
	}
	}
	
	if($b)
	{
	$q4 = "select * from book where bid = $b";
	$rs2 = mysqli_query($conn,$q4);
	
	while($r2=mysqli_fetch_array($rs2))
	{
		$f2=1;
		$st=$r2[4];
	}
	}
	
	if($f1==0)
	{
		echo "<script>alert('Invalid Student Id');</script>";
	}
	elseif($f2==0)
	{
		echo "<script>alert('Invalid Book Id');</script>";
	}
	elseif($st=="Issued")
	{
		echo "<script>alert('Book Is Already Issued');</script>";
	}
	else
	{
	$q1= "insert into issue values($a,$b,'$c','$d')";
	mysqli_query($conn,$q1);
	
	$q2 = "update book set bstatus = 'Issued' where bid = $b";
	mysqli_query($conn,$q2);
	
	echo "<script>alert('Book Issued Successfully');</script>";
	}
	mysqli_close($conn);
}

?>

<html>
<head>
<link href="css/bstyle.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="box">
<center>
<h2 align="center">Book Issue</h2>
<form method="post" action="bissue.php">

  <table border="1" cellpadding="10" >
    <tr>
	     <td class="l">Enter Student Id</td>
		 <td><input class="ip" type="text" name="sid" autocomplete="off"></td>
	</tr>
	    <tr>
	     <td class="l">Enter Book Id</td>
		 <td><input class="ip" type="text" name="bid" autocomplete="off"></td>
	</tr>
	    <tr>
	     <td class="l">Enter Issue Date</td>
		 <td><input class="ip" type="text" name="idate" value="<?php echo date("d/m/y");?>" autocomplete="off"></td>
	</tr>
	    <tr>
	     <td class="l">Enter Submission Date</td>
		 <td><input class="ip" type="text" name="sdate" autocomplete="off"></td>
	</tr>
	   
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Submit" name="btn"></td>
	</tr>
	
	<tr>
        <td colspan="3" align="center"><a id="ex" href="bissuerecord.php" >Issue Record</a></td>
   </tr>
	
	</table>
	</form>
</center>
</div>
</body>
</html>	