<?php ?><style>
.box{
	margin-top:100px;
	
}
.box table td{
	width:200px;
}
</style>

<?php
include "header.php";
include "connect.php";
echo "<link href= 'css/bstyle.css' rel='stylesheet' type='text/css'>";

	$q1="select * from issue";
	
$rs1 = mysqli_query($conn,$q1);

echo "<div class='box'>";
echo "<center>";
echo "<h2>Book Issue Record</h2>";
echo "<table border=1 cellpadding=10>";
echo "<tr class='l'>
          <td>Student ID
		  <td>Book ID
		  <td>Issue Date
		  <td>Submit Date
		  </tr>";
		  
while($r1=mysqli_fetch_array($rs1))
{
	echo "<tr class='l'>";
	echo "<td>".$r1[0];
	echo "<td>".$r1[1];
	echo "<td>".$r1[2];
	echo "<td>".$r1[3];
	
	echo "</tr>";

}
echo "</table>";
echo "</center>";
echo "</div>";
mysqli_close($conn);
?>