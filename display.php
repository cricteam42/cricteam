<?php
require_once("db.php");
$sql = "SELECT * FROM scorecards ORDER BY date DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="14">Upcoming Matches</th>
</tr>
<tr class="listheader">
<td>Date</td>
<td>Match Type</td>
<td>Team1</td>
<td>Team2</td>
<td>Stadium</td>
<td>Team1 Captain</td>
<td>Team2 Captain</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["matcht"]; ?></td>
<td><?php echo $row["team1"]; ?></td>
<td><?php echo $row["team2"]; ?></td>
<td><?php echo $row["stadium"]; ?></td>
<td><?php echo $row["team1p"]; ?></td>
<td><?php echo $row["team2p"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>