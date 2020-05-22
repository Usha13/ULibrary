<?php
include "mheader.php";
?>

<html>
<head>
<style>
    body{
	background-image:url('cimg/img17.jpg');
	background-repeat:no-repeat;
	height:1000px;
	margin:0px;
	padding:0px;
	background-size:cover;
	background-position:center;
      }
	.cont
		{   
    position:absolute;
	margin-top:400px;
	left:50%;
	height:750px;
	width:700px;
	transform:translate(-50%,-50%);
	background:rgba(0,0,0,0.5);
	border-radius:10px;
	}
	
	.cont h1{
	color:white;
	text-align:center;
	height:50px;
	margin-top:20px;
	}
	
	.cont table{
		height:700px;
		width:700px;
	}
	.l
	{
	color:white;
	font-size:20px;
	font-weight:bold;
	}

	.ip
	{
	width:100%;
	height:40px;
	font-size:20px;
	}
	#rip{
	    resize:none;
		font-size:20px;
	}
	#b{
	width:200px;
	height:50px;
	border-radius:10px;
	background:skyblue;
	color:black;
	font-size:22px;
	font-weight:bold;
	}
	 
</style>
</head>
<body>
<div class="cont">
<h1>CONTACT US</h1>
<form method="post" action="contact.php">

<table cellpadding="10" width="300px">

      
		<tr><td class="l">Enter Name</td>
		<td ><input class="ip" type="text" name="id" autocomplete="off"></td></tr>
  
         <tr><td class="l">Enter Email Id</td>
   			<td ><input class="ip" type="text" name="em" autocomplete="off"></td></tr>

          <tr><td class="l">Enter Mobile No.</td>
   			<td ><input class="ip" type="text" name="mb" autocomplete="off"></td></tr> 

         <tr><td class="l">Enter Remark</td>
   			<td ><textarea id ="rip" rows="7"  cols="50" name="rm"></textarea></td></tr> 			
        
   
    <tr><td align="center" colspan="2"><input id="b" type="submit" value="Submit" name="btn"></td></tr>  


 </div>
 </body>
 </html>