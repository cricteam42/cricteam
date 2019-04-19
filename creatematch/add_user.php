<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO scorecards(date,matcht,team1,team2,stadium,team1p,team2p) VALUES ('" . $_POST["date"] . "','" . $_POST["matcht"] . "','" . $_POST["team1"] . "','" . $_POST["team2"] . "','" . $_POST["stadium"] . "','" . $_POST["team1p"] . "','" . $_POST["team2p"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Add Upcoming Matches</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Upcoming Matches</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add Upcoming Matches</td>
</tr>
<tr>
<td><label>Enter Date:</label></td>
<td><input type="text" name="date" class="txtField"></td>
</tr>
<tr>
<td><label>Enter Match Type:</label></td>
<td><input type="text" name="matcht" class="txtField"></td>
</tr>
<td><label>Enter Team1:</label></td>
<td><input type="text" name="team1" class="txtField"></td>
</tr>
<td><label>Enter Team2:</label></td>
<td><input type="text" name="team2" class="txtField"></td>
</tr>
<td><label>Enter Stadium:</label></td>
<td><input type="text" name="stadium" class="txtField"></td>
</tr>
<td><label>Enter Team1 Captain:</label></td>
<td><input type="text" name="team1p" class="txtField"></td>
</tr>
<td><label>Enter Team2 Captain:</label></td>
<td><input type="text" name="team2p" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>