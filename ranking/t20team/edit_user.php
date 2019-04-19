<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE t20team set Team_Rating='" . $_POST["Team_Rating"] . "' WHERE Team_Name='" . $_POST["Team_Name"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM t20team WHERE Team_Name='" . $_GET["Team_Name"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Team Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Ranking</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Team Ranking</td>
</tr>
<tr>
<td><label>Team Name</label></td>
<td><input type="text" name="Team_Name" class="txtField" value="<?php echo $row['Team_Name']; ?>"></td>
</tr>
<tr>
<td><label>Team Rating</label></td>
<td><input type="text" name="Team_Rating" class="txtField" value="<?php echo $row['Team_Rating']; ?>"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>