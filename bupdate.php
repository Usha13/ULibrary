<?php
include "header.php";

$id= $_SESSION["bid"];
	
include "connect.php";

$q = "select * from book where bid = $id";
$rs= mysqli_query($conn,$q);
		 
while($r=mysqli_fetch_array($rs))
{
	$bid=$r[0];
	$bname=$r[1];
	$aname=$r[2];
	$sname=$r[3];
}

if(isset($_POST["btn"]))
{
	$a=$_POST["bid"];
	$b=$_POST["bname"];
	$c=$_POST["an"];
	$d=$_POST["sn"];
	
$q = "update book set bid=$a, bname='$b',bauthor='$c',
         bsub='$d' where bid =$id ";

$rs=mysqli_query($conn,$q);

if($rs)
{
	?>
	<script>
	alert("Book Data Updated Successfully");
	window.open("bsearch.php","_self");
	</script>
	<?php
}

	
}
mysqli_close($conn);
?>

<html>
<head>
<link href="css/bstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<center>
<h2>Book Information</h2>
<form method="post" action="bupdate.php">

  <table border="1" cellpadding="10" >
 
    <tr>
	     <th class="l">Book Id</th>
		 <td><input class="ip" type="text" name="bid" value="<?php echo $bid; ?>"  autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Book Name</th>
		 <td><input class="ip" type="text" name="bname" value="<?php echo $bname; ?>" autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Author Name</th>
		 <td><input class="ip" type="text" name="an" value="<?php echo $aname; ?>" autocomplete="off"></td>
	</tr>
	 <tr>
	     <th class="l">Subject Name</th>
		 <td><input class="ip" type="text" name="sn" value="<?php echo $sname; ?>" autocomplete="off"></td>
	</tr>
	 
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Update" name="btn"></td>
	</tr>
	
  </table>

</form>
</center>
</body>