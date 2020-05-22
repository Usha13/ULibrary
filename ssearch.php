
<?php
include "header.php";
?>


<html>
<head>
<link href="css/sstyle.css" rel="stylesheet" type="text/css">
<link href="css/searchstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<center>
<h2>Search Student</h2>
<form method="post" action="ssearch.php">

<table border="1" cellpadding="10">

  <tr>
     <td class="l">Enter Student Id</td>
	 <td><input class="ip" type="text" name="sid" autocomplete="off"></td>
 </tr>
  <tr> 
	 <td colspan="2" align="center"><input id="b"type="submit" name="btn" value="Search"></td>
	 
  </tr>
  <tr>
  <td colspan="3" align="center"><a href="catsearch.php"  id="ex">Search By Category</a>
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
$_SESSION["sid"] = $_POST["sid"];
$id= $_SESSION["sid"];

$q= "select * from std where sid = $id";		

$rs = mysqli_query($conn,$q);
$f=0;

echo "<div class='box2'>";
echo "<center>";
echo "<table border=1 cellpadding=10>";
while($r=mysqli_fetch_array($rs))
{
	$f=1;
	echo "<tr class='l'><td align='center' colspan=2><h2>Student Information</h2>";
	echo "<tr class='l'>";
	echo "<th>Student Id<td>".$r[0];
	echo "<tr class='l'>";
	echo "<th>Student Name<td>".$r[1];
	echo "<tr class='l'>";
	echo "<th>Student Gender<td>".$r[2];
	echo "<tr class='l'>";
	echo "<th>Student Branch<td>".$r[3];
	echo "<tr class='l'>";
	echo "<th>Student Sem<td>".$r[4];
	echo "<tr class='l'>";
	echo "<th>Student Contact<td>".$r[5];
	
	echo "<tr class='l'>";
	echo "<th colspan='2'><a id='b1' href='supdate.php'>Update </a>";
    echo "<a id='b2' href='sdelete.php'>Delete</a></th>";
	echo "</tr>";
	echo "</table>";
}
if($f==0)
{
	echo "<script>alert('Invalid Student Id');</script>";
}

}
mysqli_close($conn);

?>