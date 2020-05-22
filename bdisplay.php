<?php																				

$q= "select * from book";		

$rs = mysqli_query($conn,$q);

echo "<center>";
echo "<table border=1 cellpadding=10>";
echo "<tr><td>Book Id<td>Book Name<td><td>Author Name<td>Sub Name</tr>";
while($r=mysqli_fetch_array($rs))
{
	echo "<tr>";
	echo "<td>".$r[0];
	echo "<td>".$r[1];
	echo "<td>".$r[2];
	echo "<td>".$r[3];
	echo "</tr>";

}
mysqli_close($conn);
?>