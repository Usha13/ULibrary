<?php
session_start();
$id= $_SESSION["bid"];
	
include "connect.php";

$q = "delete from book where bid = $id";
$rs= mysqli_query($conn,$q);

if($rs)
{
	?>
	<script>
	alert("Book Data Deleted Successfully");
	window.open("bsearch.php","_self");
	</script>
	<?php
}
mysqli_close($conn);

?>
