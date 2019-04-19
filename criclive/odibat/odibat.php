<?php
require_once("db.php");
$sql="SELECT commentry.over, commentry.comment, commentry.match_id, cricketmatch.id FROM commentry INNER JOIN cricketmatch ON commentry.match_id = cricketmatch.id order by over desc";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Commentary</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr>
	<th colspan="4">Ball by Ball commentary</th>
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
</body></html>