<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO odibowl(Player_Name,Player_team,Player_Rating) VALUES ('" . $_POST["Player_Name"] . "','" . $_POST["Player_team"] . "','" . $_POST["Player_Rating"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Ranking</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add Player Ranking</td>
</tr>
<tr>
<td><label>Player_Name</label></td>
<td><input type="text" name="Player_Name" class="txtField"></td>
</tr>
<tr>
<td><label>Player_Team</label></td>
<td><input type="text" name="Player_team" class="txtField"></td>
</tr>
<tr>
<td><label>Player_Rating</label></td>
<td><input type="text" name="Player_Rating" class="txtField"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>