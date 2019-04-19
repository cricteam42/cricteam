<?php
require_once("db.php");
$sql = "SELECT * FROM images ORDER BY name DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Player</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add User</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="14">PLAYER DETAILS</th>
</tr>
<tr class="listheader">
<td>Players Name</td>
<td>Runs</td>
<td>Balls</td>
<td>Four</td>
<td>Six</td>
<td>Strike Rate</td>
<td>Average</td>
<td>Wicket</td>
<td>Best Bowling</td>
<td>Bowling Average</td>
<td>Fiftes</td>
<td>Hundred</td>
<td>High Score</td>
<td>CRUD Actions</td>
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
<td><?php echo $row["pname"]; ?></td>
<td><?php echo $row["runs"]; ?></td>
<td><?php echo $row["balls"]; ?></td>
<td><?php echo $row["four"]; ?></td>
<td><?php echo $row["six"]; ?></td>
<td><?php echo $row["strike"]; ?></td>
<td><?php echo $row["avg"]; ?></td>
<td><?php echo $row["wicket"]; ?></td>
<td><?php echo $row["bestbowl"]; ?></td>
<td><?php echo $row["bowlingavg"]; ?></td>
<td><?php echo $row["fifty"]; ?></td>
<td><?php echo $row["hundered"]; ?></td>
<td><?php echo $row["highscore"]; ?></td>
<td><a href="edit_user.php?pname=<?php echo $row["pname"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  
    <a href="delete_user.php?pname=<?php echo $row["pname"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
<a href="/livecricket/dashboard.php">Back</a>
</body></html>