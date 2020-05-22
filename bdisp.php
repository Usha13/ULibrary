<style>

.box table td{
	width:200px;
}
</style>
<?php																				
include "header.php";
include "connect.php";
echo "<link href= 'css/bstyle.css' rel='stylesheet' type='text/css'>";

$q= "select * from book";		

$rs = mysqli_query($conn,$q);
echo "<div class='box'>";
echo "<center>";
echo "<h2>Book Information</h2>";

echo "<table border=1 cellpadding=10>";
echo "<tr class='l'><td>Book Id<td>Book Name<td>Author Name<td>Sub Name<td>Status</tr>";
while($r=mysqli_fetch_array($rs))
{
	echo "<tr class='l'>";
	echo "<td>".$r[0];
	echo "<td>".$r[1];
	echo "<td>".$r[2];
	echo "<td>".$r[3];
	echo "<td>".$r[4];
	echo "</tr>";

}
echo "</table>";
echo "</center>";
echo "</div>";

mysqli_close($conn);
?>


