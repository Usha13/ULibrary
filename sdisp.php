<style>
.box{
	margin-top:40px;
	
}
.box table td{
	width:200px;
}
</style>

<?php
include "header.php";
include "connect.php";
echo "<link href= 'css/sstyle.css' rel='stylesheet' type='text/css'>";

	$q1="select * from std";
	
$rs1 = mysqli_query($conn,$q1);

echo "<div class='box'>";
echo "<center>";
echo "<h2>Student Information</h2>";
echo "<table border=1 cellpadding=10>";
echo "<tr class='l'><td>S Id
          <td>S Name
		  <td>S Gender
		  <td>S Branch
		  <td>S Sem
		  <td>S Contact
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
echo "</table>";
echo "</center>";
echo "</div>";
mysqli_close($conn);
?>