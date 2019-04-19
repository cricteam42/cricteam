<?php
require_once("db.php");
$sql = "SELECT * FROM t20bowl ORDER BY Player_Rating DESC";
$result = mysqli_query($conn,$sql);
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
<div align="right" style="padding-bottom:5px;"></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<h1><tr>
<th colspan="4">T20 BOWLING RANKING</th>
</tr></h1>
<tr class="listheader">
<td>Sno</td>
<td>Players Name</td>
<td>Player Team</td>
<td>Player Rating</td>
</tr>
<?php
$r=1;
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $r++; ?></td>
<td><?php echo $row["player_name"]; ?></td>
<td><?php echo $row["player_team"]; ?></td>
<td><?php echo $row["player_rating"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>