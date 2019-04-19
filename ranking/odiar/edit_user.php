<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE odiar set player_team='" . $_POST["player_team"] . "', player_rating='" . $_POST["player_rating"] . "' WHERE player_name='" . $_POST["player_name"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM odiar WHERE player_name='" . $_GET["player_name"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Player Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Ranking</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Ranking</td>
</tr>
<tr>
<td><label>Player Name</label></td>
<td><input type="text" name="player_name" class="txtField" value="<?php echo $row['player_name']; ?>"></td>
</tr>
<tr>
<td><label>Player Team</label></td>
<td><input type="text" name="player_team" class="txtField" value="<?php echo $row['player_team']; ?>"></td>
</tr>
<tr>
<td><label>Player Rating</label></td>
<td><input type="text" name="player_rating" class="txtField" value="<?php echo $row['player_rating']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>