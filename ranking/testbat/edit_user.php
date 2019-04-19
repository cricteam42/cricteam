<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE testbat set Player_team='" . $_POST["Player_team"] . "', Player_Rating='" . $_POST["Player_Rating"] . "' WHERE Player_Name='" . $_POST["Player_Name"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM testbat WHERE Player_Name='" . $_GET["Player_Name"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Ranking</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Player Ranking</td>
</tr>
<tr>
<td><label>Player Name</label></td>
<td><input type="text" name="Player_Name" class="txtField" value="<?php echo $row['Player_Name']; ?>"></td>
</tr>
<tr>
<td><label>Player Team</label></td>
<td><input type="text" name="Player_team" class="txtField" value="<?php echo $row['Player_team']; ?>"></td>
</tr>
<tr>
<td><label>Player Rating</label></td>
<td><input type="text" name="Player_Rating" class="txtField" value="<?php echo $row['Player_Rating']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>