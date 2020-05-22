<?php

session_start();
$id= $_SESSION["sid"];
	
include "connect.php";

$q = "delete from std where sid = $id";
$rs= mysqli_query($conn,$q);

if($rs)
{
	?>
	<script>
	alert("Student Data Deleted Successfully");
	window.open("ssearch.php","_self");
	</script>
	<?php
}
mysqli_close($conn);

?>
