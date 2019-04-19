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
	width:270%;
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


<?php require_once 'process.php'; ?>
<?php

if(isset($_SESSION['message'])) ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">

<div>
<center>
<?php
$mysqli=new mysqli('127.0.0.1','root','','ranking') or die(mysqli_error($mysqli));
$result=$mysqli->query("select * from testbat")or die($mysqli->error);
//pre_r($result);
?>
<div>
	<table>
	<tr>
	<th>player name</th>
	<th>Player Team</th>
	<th>Player Rating</th>
	<th>Action</th>
	</tr>
	
	<?php
	while($row=$result->fetch_assoc()):
	?>
	<tr>
	<td><?php echo $row['Player_Name']; ?></td>
	<td><?php echo $row['Player_team']; ?></td>
	<td><?php echo $row['Player_Rating']; ?></td>
	<td><a href="curd.php?edit=<?php echo $row['Player_Name']; ?>">Edit</a>
	<a href="process.php?delete=<?php echo $row['Player_Name']; ?>">Delete</a>
	</td>
	</tr>
	<?php endwhile; ?>
	</table>
</div>
<?php
function pre_r($array)
{
	echo '<pre>';
	print_r($array);
	echo '<pre>';
}
?>
<h1>CREATE NEW RANKINNG</h1>
<form id="inpform" method="POST" action="process.php" enctype="multipart/form-data">
<table align="center">
<tr><td>Enter player name:</td>
<td><input type="text" name="Player_Name" value=""></td></tr>
<tr><td>Enter Player Team:</td>
<td><input type="text"name="Player_team" value=""></td></tr>
<tr><td>Enter Player Ranking:</td>
<td><input type="text" name="Player_Rating" value=""></td></tr>

<tr><td><button type="submit" name="submit" value="submit">Submit</button></td></tr>
</table>
</form>
</div>
</body>
</html>