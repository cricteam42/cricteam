
<?php

$conn=mysqli_connect('127.0.0.1','root','');

if (!$conn) 
{
	echo "Not connected  to server";

}
if(!mysqli_select_db($conn,'ranking'))
{
    echo "Database Not Selected";
}
$Player_Name=$_POST['Player_Name'];
$Player_team=$_POST['Player_team'];
$Player_Rating=$_POST['Player_Rating'];
$sql = "INSERT INTO testbat (Player_name,Player_team,Player_Rating) VALUES ('$Player_Name','$Player_team','$Player_Rating')";

if(!mysqli_query($conn,$sql))
{
	echo "Not inserted";
}
else
{
	echo"Data inserted Sucessfully";
}
?>