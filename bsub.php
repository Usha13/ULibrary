<?php
  include "header.php";
  
if(isset($_POST["btn"]))
{
	$b = $_POST["bid"];
	include "connect.php";
	
	$q1 = "select * from book where bid = $b";
	$rs=mysqli_query($conn,$q1);
	$f=0;
	$st=0;
	while($r=mysqli_fetch_array($rs))
	{
		$f=1;
		$st=$r[4];
	}
	if($f==0)
	{
		echo "<script>alert('Invalid Book Id');</script>";
	}
	elseif($st=="Not Issued")
	{
		echo "<script>alert('Book is not Issued');</script>";
	}
	else
	{
	$q = "update book set bstatus = 'Not Issued' where bid = $b";
	mysqli_query($conn,$q);
	
	echo "<script>alert('Book Submited Successfully');</script>";
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
<h2 align="center">Book Submission</h2>
<form method="post" action="bsub.php">

  <table border="1" cellpadding="10" >
  
   <tr>
	     <td class="l">Enter Book Id</td>
		 <td><input class="ip" type="text" name="bid" autocomplete="off"></td>
	</tr>
		 
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Submit" name="btn"></td>
	</tr>
	
	</table>
	</form>
</center>
</div>
</body>
</html>	