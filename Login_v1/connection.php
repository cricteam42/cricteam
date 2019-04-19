<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "livecricket";


$conn=mysqli_connect($servername, $username, $password, $dbname);
if ($conn) 
{
	echo "";

}
else
{
    die("Connection failed: " . $conn);
}
?> 