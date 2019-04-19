<?php
$conn=mysqli_connect('127.0.0.1','root','');
error_reporting(0);
mysqli_select_db($conn,'ranking');
$date=$_GET['c1'];
$sql="delete from testbat where Player_Name='$Player_Name'";
$data=mysqli_query($conn,$sql);
if($data)
{
	echo"Record is deleted";
}
else
{
	echo"Record is not deleted";
}
?>