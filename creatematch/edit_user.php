<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE scorecards set matcht='" . $_POST["matcht"] . "', team1='" . $_POST["team1"] . "' ,team2='" . $_POST["team2"] . "',stadium='" . $_POST["stadium"] . "',team1p='" . $_POST["team1p"] . "',team2p='" . $_POST["team2p"] . "'WHERE date='" . $_POST["date"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM scorecards WHERE date='" . $_GET["date"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Upcoming Matches</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Upcoming Matches</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Upcoming Matches</td>
</tr>
<tr>
<td><label>Enter Date</label></td>
<td><input type="text" name="date" class="txtField" value="<?php echo $row['date']; ?>"></td>
</tr>
<td><label>Enter Match Type</label></td>
<td><input type="text" name="matcht" class="txtField" value="<?php echo $row['matcht']; ?>">

</select>
</td>
</tr>
<td><label>Enter Team1</label></td>
<td><input type="text" name="team1" class="txtField" value="<?php echo $row['team1']; ?>">
</td>

<tr><td><label>Enter Team2</label></td>
<td><input type="text" name="team2" class="txtField" value="<?php echo $row['team2']; ?>">
</td>
</tr>
<td><label>Enter stadium</label></td>
<td><input type="text" name="stadium" class="txtField" value="<?php echo $row['stadium']; ?>"></td>
</tr>
<td><label>Enter Team1 Captain</label></td>
<td><input type="text" name="team1p" class="txtField" value="<?php echo $row['team1p']; ?>"></td>
</tr>
<td><label>Enter Team2 Captian</label></td>
<td><input type="text" name="team2p" class="txtField" value="<?php echo $row['team2p']; ?>"></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>