<?php
error_reporting(0);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
   		<script src="js/jquery-3.2.1.min.js"></script>
   		<script src="js/bootstrap.min.js"></script>   		
   		<script src="../dote/js/jquery.validate.min.js"></script>

<title>Untitled Document</title>
</head>
<style>
button{
	width:100%;
	background-color:#4caf50;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
}
div{
	border-radius:5px;
	background-color:#f2f2f2;
	padding:20px;
}
input[type=text]
{
	border:2px solid #b9bcfd;
	height:30px;
	width:200px;
	border-radius:4px;
	paddding:10px;
	
}
</style>
<body>

<div>
<center>
<h1>CREATE NEW RANKINNG</h1>
<form id="inpform" method="POST" action="12.php" enctype="multipart/form-data">
<table align="center">
<tr><td>Enter player name:</td>
<td><input type="text" name="Player_Name" value=""></td></tr>
<tr><td>Enter Player Rating:</td>
<td><input type="text"name="Player_Rating" value=""></td></tr>
<tr><td>Enter Player Team :</td>
<td><input type="text" name="Player_team" value=""></td></tr>

<tr><td><button type="submit" name="submit" value="submit">Submit</button></td>
<td> <button type="reset">Reset</button></tr>
</table>
</form>
</div>
</body>
</html>

