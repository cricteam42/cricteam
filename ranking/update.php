<?php
$conn=mysqli_connect('127.0.0.1','root','');
error_reporting(0);
mysqli_select_db($conn,'ranking');
?>
<html>
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
input[type=datetime-local]
{
	border:2px solid #b9bcfd;
	height:30px;
	width:200px;
	border-radius:4px;
	paddding:10px;
	
}
select{
	border:2px solid #b9bcfd;
	height:30px;
	width:200px;
	border-radius:4px;
	paddding:10px;
}
</style>
<body>
<form id="inpform" method="GET" action="">
<table align="center">
<tr><td>Player Name:</td>
<td><input type="text" name="Player_Name" value="<?php echo $_GET['c1']; ?>"></td>
</tr>
<tr><td>Player Team:</td>
<td><input type="text" name="Player_team" value="<?php echo $_GET['sr']; ?>"></td>
</tr>
<tr><td>Player Rating:</td>
<td><input type="text" name="Player_Rating" value="<?php echo $_GET['s1']; ?>"></td>
</tr>
<tr><td><button type="submit" name="submit" value="submit">Submit</button></td>
<td> <button type="reset">Reset</button></tr>
</table>
</form>
<?php
if($_GET['submit'])
{
	echo $Player_Name=$_GET['c1'];
	echo $Player_team=$_GET['sr'];
	echo $Player_Rating=$_GET['s1'];
	$query="UPDATE testbat SET Player_team='Player_team',Player_Rating='Player_Rating' WHERE Player_Name='Player_Name'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"Record updated sucessfully. </br></br><a href='testbat.php' >Check Updated Match Here......</a>";
	}
	else{
		echo"Record not updated";
	}
}
?>
</body>
</html>