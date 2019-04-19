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

<div>
<center>
<h1>CREATE NEW MATCH</h1>
<form id="inpform" method="POST" action="insertnewmatch.php">
<table align="center">
<tr><td>Enter Date:</td>
<td><input type="datetime-local" name="date" value=""></td></tr>
<tr><td>Enter Match Type:</td>
<td><select name="matcht">
<option>TEST</option>
<option>ODI</option>
<option>T20</option>
</select></td></tr>
<tr><td>Enter Team1:</td>
<td><select name="team1" value="">
<option>America</option>
<option>Australia</option>
<option>Afganistan</option>
<option>Bangladesh</option>
<option>Canada</option>
<option>England</option>
<option>Kenya</option>
<option>HongKong</option>
<option>India</option>
<option>Ireland</option>
<option>Netherland</option>
<option>NewZealand</option>
<option>Pakistan</option>
<option>soctland</option>
<option>SouthAfrica</option>
<option>Srilanka</option>
<option>WestIndies</option>
<option>Zimbawawe</option>
</select></td>
</tr>
<tr><td>Enter Team2:</td>
<td><select name="team2" value="">
<option>America</option>
<option>Australia</option>
<option>Afganistan</option>
<option>Bangladesh</option>
<option>Canada</option>
<option>England</option>
<option>Kenya</option>
<option>HongKong</option>
<option>India</option>
<option>Ireland</option>
<option>Netherland</option>
<option>NewZealand</option>
<option>Pakistan</option>
<option>soctland</option>
<option>SouthAfrica</option>
<option>Srilanka</option>
<option>WestIndies</option>
<option>Zimbawawe</option>
</select></td>
</tr>
<tr><td>Enter Stadium:</td>
<td><input type="text"name="stadium" value=""></td>
</tr>
<tr><td>Enter Team1Players:</td>
<td><input type="text"name="team1p" value=""></td>
</tr>
<tr><td>Enter Team2Players:</td>
<td><input type="text"name="team2p" value=""></td>
</tr>
<tr><td><button type="submit"value="submit">Submit</button></td>
<td> <button type="reset">Reset</button></tr>
</table>
</form>
</div>
</body>
</html>