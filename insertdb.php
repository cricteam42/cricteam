
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
$name=$_POST['name'];
$runs=$_POST['runs'];
$balls=$_POST['balls'];
$avg=$_POST['avg'];
$strike=$_POST['strike'];
$four=$_POST['four'];
$six=$_POST['six'];
$fifty=$_POST['fifty'];
$hundered=$_POST['hundered'];
$wicket=$_POST['wicket'];
$bestbowl=$_POST['bestbowl'];
$bowlingavg=$_POST['bowlingavg'];
$highscore=$_POST['highscore'];
$sql = "INSERT INTO scorecard (name,runs,balls,avg,strike,four,six,fifty,hundered,wicket,bestbowl,bowlingavg,highscore) VALUES ('$name','$runs','$balls','$avg','$strike','$four','$six','$fifty','$hundered','$wicket','$bestbowl','$bowlingavg','$highscore')";

if(!mysqli_query($conn,$sql))
{
	echo "Not inserted";
}
else
{
	echo"Data inserted Sucessfully";
}
header("refresh:2,url=create_player.php");
?>
