<html>
<style>
td{
	padding:8;
	font-family:Arial, Helvetica, sans-serif;
	text-align:center;
}
th{
	padding:8;
	text-shadow:2px 2px 2px #8994F8;
	font-family:Arial, Helvetica, sans-serif;
	text-align:center;
	}
table{
	font-family:Arial, Helvetica, sans-serif;
	border-collapse:collapse;
	background-color:#d5a2f7;
	width:100%;
	}

</style>
<body>
<table border="5">

<tr>
<th colspan="3" STYLE="BACKGROUND-COLOR:#c6f7ee;">ODI TEAM RANKING</th>
</tr>

<tr>
<th>S.NO</th>
<th>Team Name</th>
<th>Team Rating</th>
</tr>
<?php
$conn=mysqli_connect('127.0.0.1','root','');
error_reporting(0);
mysqli_select_db($conn,'ranking');
$sql = "select *from oditeam order by Team_Rating desc limit 10";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
if($total!=0)
{
$i=0;
while($result=mysqli_fetch_assoc($data))
{
echo"<tr>
<td>".(++$i)."</td>
<td>".$result['Team_Name']."</td>
<td>".$result['Team_Rating']."</td>
</tr>";
	}
}

else{
	echo"table has no record";
}

?>
</table>
</body>
</html>