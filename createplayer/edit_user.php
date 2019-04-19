<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE images set runs='" . $_POST["runs"] . "', balls='" . $_POST["balls"] . "' ,four='" . $_POST["four"] . "',six='" . $_POST["six"] . "',strike='" . $_POST["strike"] . "',
avg='" . $_POST["avg"] . "',wicket='" . $_POST["wicket"] . "',
bestbowl='" . $_POST["bestbowl"] . "',bowlingavg='" . $_POST["bowlingavg"] . "',fifty='" . $_POST["fifty"] . "',hundered='" . $_POST["hundered"] . "',highscore='" . $_POST["highscore"] . "'WHERE pname='" . $_POST["pname"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM images WHERE pname='" . $_GET["pname"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Player</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Player</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Player</td>
</tr>
<tr>
<td><label>Enter PlayerName</label></td>
<td><input type="text" name="pname" class="txtField" value="<?php echo $row['pname']; ?>"></td>
</tr>
<td><label>Enter Runs</label></td>
<td><input type="text" name="runs" class="txtField" value="<?php echo $row['runs']; ?>"></td>
</tr>
<td><label>Enter Balls</label></td>
<td><input type="text" name="balls" class="txtField" value="<?php echo $row['balls']; ?>"></td>
</tr>
<td><label>Enter Fours</label></td>
<td><input type="text" name="four" class="txtField" value="<?php echo $row['four']; ?>"></td>
</tr>
<td><label>Enter six</label></td>
<td><input type="text" name="six" class="txtField" value="<?php echo $row['six']; ?>"></td>
</tr>
<td><label>Enter strike</label></td>
<td><input type="text" name="strike" class="txtField" value="<?php echo $row['strike']; ?>"></td>
</tr>
<td><label>Enter average</label></td>
<td><input type="text" name="avg" class="txtField" value="<?php echo $row['avg']; ?>"></td>
</tr>
<td><label>Enter Wicket</label></td>
<td><input type="text" name="wicket" class="txtField" value="<?php echo $row['wicket']; ?>"></td>
</tr>
<td><label>Enter Best Bowl</label></td>
<td><input type="text" name="bestbowl" class="txtField" value="<?php echo $row['bestbowl']; ?>"></td>
</tr>
<td><label>Enter Bowling Average</label></td>
<td><input type="text" name="bowlingavg" class="txtField" value="<?php echo $row['bowlingavg']; ?>"></td>
</tr>
<td><label>Enter Fiftes</label></td>
<td><input type="text" name="fifty" class="txtField" value="<?php echo $row['fifty']; ?>"></td>
</tr>
<td><label>Enter Hundred</label></td>
<td><input type="text" name="hundered" class="txtField" value="<?php echo $row['hundered']; ?>"></td>
</tr>
<td><label>Enter High Score</label></td>
<td><input type="text" name="highscore" class="txtField" value="<?php echo $row['highscore']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>