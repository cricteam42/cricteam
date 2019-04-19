<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO images(pname,runs,balls,four,six,strike,avg,wicket,bestbowl,bowlingavg,fifty,hundered,highscore) VALUES ('" . $_POST["pname"] . "','" . $_POST["runs"] . "','" . $_POST["balls"] . "','" . $_POST["four"] . "','" . $_POST["six"] . "','" . $_POST["strike"] . "','" . $_POST["avg"] . "','" . $_POST["wicket"] . "','" . $_POST["bestbowl"] . "','" . $_POST["bowlingavg"] . "','" . $_POST["fifty"] . "','" . $_POST["hundered"] . "','" . $_POST["highscore"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Add Player</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Player</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Player</td>
</tr>
<tr>
<td><label>Player_Name</label></td>
<td><input type="text" name="pname" class="txtField"></td>
</tr>
<tr>
<td><label>Enter Runs:</label></td>
<td><input type="text" name="runs" class="txtField"></td>
</tr>
<tr>
<td><label>Enter Balls:</label></td>
<td><input type="text" name="balls" class="txtField"></td>
</tr>
<td><label>Enter Fours:</label></td>
<td><input type="text" name="four" class="txtField"></td>
</tr>
<td><label>Enter Six:</label></td>
<td><input type="text" name="six" class="txtField"></td>
</tr>
<td><label>Enter Strike:</label></td>
<td><input type="text" name="strike" class="txtField"></td>
</tr>
<td><label>Enter Average:</label></td>
<td><input type="text" name="avg" class="txtField"></td>
</tr>
<td><label>Enter Wicket:</label></td>
<td><input type="text" name="wicket" class="txtField"></td>
</tr>
<td><label>Enter BestBowl:</label></td>
<td><input type="text" name="bestbowl" class="txtField"></td>
</tr>
<td><label>Enter BowlingAverage:</label></td>
<td><input type="text" name="bowlingavg" class="txtField"></td>
</tr>
<td><label>Enter Fifty:</label></td>
<td><input type="text" name="fifty" class="txtField"></td>
</tr>
<td><label>Enter Hundred:</label></td>
<td><input type="text" name="hundered" class="txtField"></td>
</tr>
<td><label>Enter Highscore:</label></td>
<td><input type="text" name="highscore" class="txtField"></td>
</tr>


<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>