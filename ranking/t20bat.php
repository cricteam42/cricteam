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
	background-color:#E2F1FA;
	width:100%;
	}
</style>
<body>
<table border="5">
<tr>
<th colspan="4">T20 BATSMEN RANKING</th>
</tr>
<tr>
<th>S.NO</th>
<th>Player Name</th>
<th>Player Team</th>
<th>Player Rating</th>
</tr>
<?php
$conn=mysqli_connect('127.0.0.1','root','');
error_reporting(0);
mysqli_select_db($conn,'ranking');
$sql = "select *from t20bat order by Player_rating desc limit 10";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
if($total!=0)
{
 $i=0;
 while($result=mysqli_fetch_assoc($data))
 {
  echo"<tr>
  <td>".(++$i)."</td> 
  <td>".$result['player_name']."</td>
  <td>".$result['player_team']."</td>
  <td>".$result['player_rating']."</td>
 </tr>";
 } 
}
else
{
	echo"table has no record";
}
?>
</table>
</body>
</html>