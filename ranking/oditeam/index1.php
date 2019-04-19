<?php
require_once("db.php");
$sql = "SELECT * FROM oditeam ORDER BY Team_Rating DESC";
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

<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="4">ODI TEAM RANKING</th>
</tr>
<tr class="listheader">
<td>Sno</td>
<td>Team Name</td>
<td>Team Rating</td>

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
</tr>
<?php
$i++;

}
?>
</table>
</form>
</div>
</body></html>