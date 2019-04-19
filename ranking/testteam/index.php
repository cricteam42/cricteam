<?php
require_once("db.php");
$sql = "SELECT * FROM testteam ORDER BY team_points DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Team Ranking</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Team</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="4">TEST TEAM RANKING</th>
</tr>
<tr class="listheader">
<td>Sno</td>
<td>Team Name</td>
<td>Team Rating</td>
<td>CRUD Actions</td>
</tr>
<?php
$i=0;
$r=1;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $r++; ?></td>
<td><?php echo $row["Team_Name"]; ?></td>
<td><?php echo $row["Team_Rating"]; ?></td>
<td><a href="edit_user.php?Team_Name=<?php echo $row["Team_Name"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  
    <a href="delete_user.php?Team_Name=<?php echo $row["Team_Name"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
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