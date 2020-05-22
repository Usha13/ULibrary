
<?php
include "header.php";
include "connect.php";


if(isset($_POST["btn"]))
{
	
$id=$_POST["bid"];
$name=$_POST["bname"];
$author=$_POST["an"];
$sub=$_POST["sn"];

$q="insert into book values($id,'$name','$author','$sub','Not Issued')";
mysqli_query($conn,$q);

echo "<script>alert('Book Registered Successfully');</script>";

}

?>

<html>
<head>
<link href="css/bstyle.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="box">
<center>
<h2 align="center">Book Registration</h2>
<form method="post" action="breg.php">

  <table border="1" cellpadding="10" >
    <tr>
	     <td class="l">Enter Book Id</td>
		 <td><input class="ip" type="text" name="bid" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Book Name</td>
		 <td><input class="ip" type="text" name="bname" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Author Name</td>
		 <td><input class="ip" type="text" name="an" autocomplete="off"></td>
	</tr>
	 <tr>
	     <td class="l">Enter Subject Name</td>
		 <td><input class="ip" type="text" name="sn" autocomplete="off"></td>
	</tr>
	 
	<tr>
         <td colspan="2" align="center"><input id="b" type="submit" value="Submit" name="btn"></td>
	</tr>
	
  </table>

</form>
</center>
</div>
</body>