<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path.="/livecricket/lib/DB_Connect.php";
include ($path);
session_start();
if(count($_POST)>0)
{
	//$action = $_POST["action"];
	$obj = new DB_Connect();
	$res1=$obj->open_con();
	/*switch($action)
	{
		case "login":*/
				$usrid = $_POST["usrid"];
				$pwd = $_POST["pwd"];			
				$res = $obj->Login($usrid,$pwd);
				$obj->close_con();				
				if ($res==TRUE)
				{
					header("Location:dashboard.php");
					//exit();
				}
				else
				{
					header("Location:index.php?msg=1");
				}
			/*break;
	}*/
}
?>