<?php
include "header.php";
?>
<html>
<head>
<link href="css/bstyle.css" rel="stylesheet" type="text/css">
<link href="css/searchstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<center>
<h2 align="center">Search Book</h2>
<form method="post" action="bsearch.php">
<table border="1" cellpadding="10">

  <tr>
     <td class="l">Enter Book Id</td>
	 <td><input class="ip" type="text" name="id" autocomplete="off"></td>
	 </tr>
  <tr>
	 <td colspan="2" align="center"><input id="b" type="submit" name="btn" value="Search"></td>
	 
  </tr>
</table>
<form>
</center>
</div>
</body>
</html>

<?php

include "connect.php";

if(isset($_POST["btn"]))
{
$_SESSION["bid"] = $_POST["id"];
$id= $_SESSION["bid"];

$q= "select * from book where bid = $id";		

$rs = mysqli_query($conn,$q);
$f=0;

echo "<div class='box2'>";
echo "<center>";
echo "<table border=1 cellpadding=10>";

while($r=mysqli_fetch_array($rs))
{
	$f=1;
	echo "<tr class='l'><td align='center' colspan=2><h2>Book Information</h2>";
	echo "<tr class='l'>";
	echo "<th>Book Id<td>".$r[0];
	echo "<tr class='l'>";
	echo "<th>Book Name<td>".$r[1];
	echo "<tr class='l'>";
	echo "<th>Author Name<td>".$r[2];
	echo "<tr class='l'>";
	echo "<th>Subject Name <td>".$r[3];
	echo "<tr class='l'>";
	echo "<th>Book Status <td>".$r[4];
	
	echo "<tr class='l'>";
	echo "<th colspan='2'><a id='b1' href='bupdate.php'>Update </a>";
    echo "<a id='b2' href='bdelete.php'>Delete</a></th>";
	echo "</tr>";
	echo "</table>";
}
echo "</div>";
if($f==0)
{
	echo "<script>alert('Invalid Book Id');</script>";
}
}
mysqli_close($conn);

?>
