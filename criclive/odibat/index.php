<?php
require_once("db.php");
$sql="SELECT commentry.over, commentry.comment, commentry.match_id, cricketmatch.id FROM commentry INNER JOIN cricketmatch ON commentry.match_id = cricketmatch.id order by over desc";
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
<div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add User</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="4">ODI BATSMEN RANKING</th>
</tr>
<tr class="listheader">
<td>over</td>
<td>Commentry</td>

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
<td><?php echo $row["over"]; ?></td>
<td><?php echo $row["comment"]; ?></td>

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