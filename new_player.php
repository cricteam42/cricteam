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
<h1>CREATE NEW PLAYER</h1>
<form id="inpform" method="POST" action="insertdb.php">
<table align="center">
<tr><td>Enter name:</td>
<td><input type="text" name="name" value=""></td></tr>
<tr><td>Enter Runs:</td>
<td><input type="text" name="runs" value=""></td></tr>
<tr><td>Enter Balls:</td>
<td><input type="text"name="balls" value=""></td>
</tr>
<tr><td>Enter Average:</td>
<td><input type="text"name="avg" value=""></td>
</tr>
<tr><td>Enter Strikerate:</td>
<td><input type="text"name="strike" value=""></td>
</tr>
<tr><td>Enter 4's:</td>
<td><input type="text"name="four" value=""></td>
</tr>
<tr><td>Enter 6's:</td>
<td><input type="text"name="six" value=""></td>
</tr>
<tr><td>Enter 50's:</td>
<td><input type="text"name="fifty" value=""></td>
</tr>
<tr><td>Enter 100's:</td>
<td><input type="text"name="hundered" value=""></td>
</tr>
<tr><td>Enter Wicket:</td>
<td><input type="text"name="wicket" value=""></td>
</tr>
<tr><td>Enter BestBowling:</td>
<td><input type="text"name="bestbowl" value=""></td>
</tr>
<tr><td>Enter BowlingAverage:</td>
<td><input type="text"name="bowlingavg" value=""></td>
</tr>
<tr><td>Enter Highscore:</td>
<td><input type="text"name="highscore" value=""></td>
</tr>
<tr><td><button type="submit"value="submit">Submit</button></td>
<td> <button type="reset">Reset</button></tr>
</table>
</form>
</div>
</body>
</html>