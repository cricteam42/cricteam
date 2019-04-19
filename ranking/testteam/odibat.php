<?php
require_once("db.php");
$sql = "SELECT * FROM oditeam ORDER BY Player_Rating DESC";
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
	<th colspan="4">ODI BATSMEN RANKING</th>
</tr>
<tr class="listheader">
<td>Players Name</td>
<td>Player Team</td>
<td>Player Rating</td>

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
<td><?php echo $row["team_name"]; ?></td>
<td><?php echo $row["team_rating"]; ?></td>
<td><?php echo $row["team_points"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
<h3>----click To Go Back-----</h3>
<h4><a href="/livecricket/dashboard.php">Back</a></h4>
</body></html>