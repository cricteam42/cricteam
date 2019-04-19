<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO t20team(Team_Name,Team_Rating) VALUES ('" . $_POST["Team_Name"] . "','" . $_POST["Team_Rating"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Team Added Successfully";
	}
}
?>
<html>
<head>
<title>Team Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Team</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add Team</td>
</tr>
<tr>
<td><label>Team Name</label></td>
<td><input type="text" name="Team_Name" class="txtField"></td>
</tr>
<tr>
<td><label>Team Rating</label></td>
<td><input type="text" name="Team_Rating" class="txtField"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>