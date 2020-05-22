<?php
include "header.php";
include "connect.php";
?>
<style>
#sl{
	width:100px;
	height:30px;
	font-size:20px;
}
</style>

<html>
<head>
<link href="css/sstyle.css" rel="stylesheet" type="text/css">
<link href="css/searchstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<form action="catsearch.php" method="post">

<?php
$q2= "select distinct ssem from std order by ssem asc";
$rs2= mysqli_query($conn,$q2);
echo "<center>";
echo "<h2>Student Display</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th class='l'>Search By Sem</td>";
echo "<td ><select id='sl' name='ssem'>";
while($r2=mysqli_fetch_array($rs2))
{
	echo "<option>$r2[0]</option>";
}
echo "</select>";

?>
	 </td>
	 
	 <td><input id="b" type="submit" name="btn1" value="Search"></td>
	 
  </tr>
  <tr>
      <td class="l" colspan="3" align="center">OR</td>
  </tr>	  
  <tr>
      <th class="l">Search By Name</td>
	  <td><input class="ip" type="text" name="n" autocomplete="off"></td>
	  <td><input id="b" type="submit" name="btn2" value="Search"></td>
  </tr>
  
</table>
<form>
</center>
</div>
</body>
</html>

<?php																				

if(isset($_POST["btn1"]))
{
	$sm = $_POST["ssem"];
	$q1="select * from std where ssem = $sm";
	
$rs1 = mysqli_query($conn,$q1);

echo "<div class='box2'>";
echo "<center>";
echo "<h2>Student Information</h2>";
echo "<table border=1 cellpadding=10>";
echo "<tr class='l'><td>S Id
          <th>S Name
		  <th>S Gender
		  <th>S Branch
		  <th>S Sem
		  <th>S Contact
		  </tr>";
		  
while($r1=mysqli_fetch_array($rs1))
{
	echo "<tr class='l'>";
	echo "<td>".$r1[0];
	echo "<td>".$r1[1];
	echo "<td>".$r1[2];
	echo "<td>".$r1[3];
	echo "<td>".$r1[4];
	echo "<td>".$r1[5];
	echo "</tr>";

}
}


if(isset($_POST["btn2"]))
{
	$nm = $_POST["n"];
	$q2="select * from std where sname like '$nm%'";
	
$rs2 = mysqli_query($conn,$q2);

echo "<div class='box2'>";
echo "<center>";
echo "<h2>Student Information</h2>";
echo "<table border=1 cellpadding=10>";
echo "<tr class='l'><td>S Id
          <th>S Name
		  <th>S Gender
		  <th>S Branch
		  <th>S Sem
		  <th>S Contact
		  </tr>";
		  
while($r2=mysqli_fetch_array($rs2))
{
	echo "<tr class='l'>";
	echo "<td>".$r2[0];
	echo "<td>".$r2[1];
	echo "<td>".$r2[2];
	echo "<td>".$r2[3];
	echo "<td>".$r2[4];
	echo "<td>".$r2[5];
	echo "</tr>";

}
}
mysqli_close($conn);
?>