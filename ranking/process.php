
<?php

$mysqli=new mysqli('127.0.0.1','root','','ranking') or die(mysqli_error($mysqli));
error_reporting(0);
if(isset($_POST['submit']))
{
	
$Player_Name=$_POST['Player_Name'];
$Player_team=$_POST['Player_team'];
$Player_Rating=$_POST['Player_Rating'];

$mysqli->query("insert into testbat(Player_Name,Player_team,Player_Rating)values('$Player_Name','$Player_team','$Player_Rating')")or
die($mysqli->error);


$_SESSION['message']="Record has been inserted";
$_SESSION['msg_type']="success";


header("location:index.php");


}
if(isset($_GET['delete']))
{
$Player_Name=$_GET['delete'];	
$mysqli->query("delete from testbat where Player_Name=$Player_Name") or die($mysqli->error());




$_SESSION['message']="Record has been deleted";
$_SESSION['msg_type']="danger";



header("location:index.php");
}

?>