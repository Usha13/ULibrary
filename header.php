<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/headerstyle.css" rel="stylesheet" type="text/css">

<?php
  session_start();
  
if(!isset($_SESSION['n']))
{
	header("location:login.php");
}

  
  $name = $_SESSION['n'];
  $pic = $_SESSION['p'];
  
  echo "<div class='hd'>";
  echo "<div class='left'>";
  echo "<img src='img/$pic' alt='$name'>";
   echo "<p style='font-size:25px;'>Welcome $name !</p>";
   echo "</div>";
   echo "<div class='right'>";
  
?>
   
</head>
<body>

<h1>Library Management System</h1>
</ul>

</div>
</div>
<center>
<div class="menu">
<ul>
     
     <li><a href="phome.php">Home</a></li> 
     <li><a href="bissue.php">Book Issue</a></li> 
     <li><a href="bsub.php">Book Submit</a></li> 
     <li><a href="breg.php">Book Reg.</a></li> 
     <li><a href="bsearch.php">Book Search</a></li> 
     <li><a href="bdisp.php">View Books</a></li>
	 
     <li><a href="sreg.php">Student Reg.</a></li> 
     <li><a href="ssearch.php">Student Search</a></li> 
     <li><a href="sdisp.php">View Students</a></li>
	 
     <li><a href="logout.php">Log Out</a></li>
	 
</ul>
</div>
<hr>
</center>
</body>
</html>