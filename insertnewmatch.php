
<?php

$conn=mysqli_connect('127.0.0.1','root','');

if (!$conn) 
{
	echo "Not connected  to server";

}
if(!mysqli_select_db($conn,'livecricket'))
{
    echo "Database Not Selected";
}
$date=$_POST['date'];
$matcht=$_POST['matcht'];
$team1=$_POST['team1'];
$team2=$_POST['team2'];
$stadium=$_POST['stadium'];
$team1p=$_POST['team1p'];
$team2p=$_POST['team2p'];
$sql = "INSERT INTO scorecards (date,matcht,team1,team2,stadium,team1p,team2p) VALUES ('$date','$matcht','$team1','$team2','$stadium','$team1p','$team2p')";

if(!mysqli_query($conn,$sql))
{
	echo "Not inserted";
}
else
{
	echo"Data inserted Sucessfully";
}
header("refresh:2,url=.php");
?>
