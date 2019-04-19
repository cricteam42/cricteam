<?php
require_once("db.php");
$sql = "SELECT * FROM scorecards ORDER BY date ASC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Upcoming Matches</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"></div>
<table border="0" cellpadding="100" cellspacing="1" width="1000" class="tblListForm">
<tr>
	<th colspan="14">Upcoming Matches</th>
</tr>
<tr class="listheader" >
<td>Date</td>&nbsp;&nbsp;
<td>Match Type</td>&nbsp;&nbsp;
<td>Team1</td>&nbsp;&nbsp;
<td>Team2</td>&nbsp;&nbsp;
<td>Stadium</td>&nbsp;&nbsp;
<td>Team1 Captain</td>&nbsp;&nbsp;
<td>Team2 Captain</td>&nbsp;&nbsp;
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

<td><?php echo $row["date"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["matcht"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["team1"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["team2"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["stadium"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["team1p"]; ?></td>&nbsp;&nbsp;
<td><?php echo $row["team2p"]; ?></td>&nbsp;&nbsp;
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>