<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO t20bowl(player_name,player_team,player_rating) VALUES ('" . $_POST["player_name"] . "','" . $_POST["player_team"] . "','" . $_POST["player_rating"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Player Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Player</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add Player Ranking</td>
</tr>
<tr>
<td><label>Player_Name</label></td>
<td><input type="text" name="player_name" class="txtField"></td>
</tr>
<tr>
<td><label>Player_Team</label></td>
<td><input type="text" name="player_team" class="txtField"></td>
</tr>
<tr>
<td><label>Player_Rating</label></td>
<td><input type="text" name="player_rating" class="txtField"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>