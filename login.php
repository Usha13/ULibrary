<?php
include "connect.php";
session_start();


if(isset($_POST["btn1"]))
{
	$n = $_POST["nm"];
	
	$p = $_POST["psw"];


	$q="select * from user where uname='$n' and upass ='$p'";
	$rs = mysqli_query($conn,$q);
	$a=0;
	
	while($r=mysqli_fetch_array($rs))
	{
		$a=1;
		$name=$r[1];
		$pass=$r[2];
		$pic=$r[3];
	}
	
	if($a==1)
	{
		$_SESSION["n"]=$name;
		$_SESSION["p"]=$pic;
		header("location:phome.php");
	}
    else
	{
		echo "<script> alert('Invalid user name or password') </script>";
		
		//header("location:login.php");
    } 
}
mysqli_close($conn);

?>

<html>
<head>
<link href="css/loginstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="box">
<center>
<h1>Log In</h1>
<form method="post" action="login.php">

<table border="1" cellpadding="10" width="300px">

      
		<tr><td class="l">Enter UserName</td></tr>
		<tr><td ><input class="ip" type="text" name="nm" autocomplete="off"></td></tr>
  
         <tr><td class="l">Enter Password</td></tr>
   			<tr><td ><input class="ip" type="password" name="psw" autocomplete="off"></td></tr> 
        
   
    <tr><td align="center"><input id="b" type="submit" value="Log In" name="btn1"></td></tr>     
	 <tr><td class="l" align="center"> New User <br><a id="su" href="signup.php">Sign Up</a>  
	 
</table>
</form>
</center>
</div>
</body>
</html>