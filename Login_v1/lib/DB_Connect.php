<?php
class DB_Connect
{	
	function open_con()
	{
		//College Settings
		/*$hostadd="localhost";
		$usr="root";
		$pwd="autpc123";*/
		//Home Settings
	 	
		$hostadd = "127.0.0.1";
	 	$usr = "root"; //Database User name
	 	$pwd = ""; //Database Password
		$DB= "usertable"; //Database Name
		$this->MyCon = mysqli_connect($hostadd,$usr,$pwd,$DB);
		
		if(mysqli_connect_errno())
		{
			header("Location:error.php");
			return mysqli_connect_errno();
			exit();
		}
		else
		{
			return 1;
		}
	}//End of Open Connection
	
	
	function generateRandomString() 
	{
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$length=20;
    	$charactersLength = strlen($characters);
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) 
    	{
        	$randomString .= $characters[rand(0, $charactersLength - 1)];
    	}
    	return $randomString;
	}	
	
	function Login($usr,$pwd)
	{
		$qry = "select * from usertable where loginid = '$usr' and password = MD5('$pwd')";
			$result = mysqli_query($this->MyCon,$qry) or die("$usr $pwd Query Died ");
			$num = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result) ;
			date_default_timezone_set('Asia/Kolkata');			
			//$newusr = $row['FirstTime'];
			
			if($num>0)
			{				
				$today = date("y/m/d");		
				$time = gmdate("H:i:s",time()+19800);		
				$Sesion_Id = $this->generateRandomString();
				$_SESSION["userid"] = $row['loginid'];
				$usrid = $_SESSION["userid"];
				$_SESSION["user_session_id"] = $Sesion_Id;
				$updtLog = "update usertable set Session_Id='$Sesion_Id', Time='$time', Date='$today' where loginid = '$usrid'";
				$logupdt = mysqli_query($this->MyCon,$updtLog) or die(" $Sesion_Id Died");
				$rowcount = mysqli_affected_rows($this->MyCon);
				if($logupdt!=FALSE)
				{
					if($rowcount>0)
					{
						return TRUE;						
					}
				}		
 			}
			else
			{
				return FALSE;
			}
	}//end of login

	
		//check for valid login
	function check_login($id,$session_id)
	{
		$qry = "select loginid from usertable where loginid= '$id' and Session_Id = '$session_id'";
		$result = mysqli_query($this->MyCon,$qry) or die("Error in login");
		$numrow = mysqli_num_rows($result);
		$row = mysqli_fetch_row($result);
		if($numrow==1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	//function to logout from the system
	function Logout()
	{
		$LogId = $_SESSION["LogId"];
		$tkn = $_SESSION["userid"];
		$outTime = gmdate("H:i:s",time()+19800);
		$logouttimeqry = "update logintable set Logout_Time = '$outTime' where Log_Id = '$LogId'";
		$outres = mysqli_query($this->MyCon,$logouttimeqry) or die("Error in Query");
		$logoutqry = "update usertable set login = 0, Session_Id ='' where loginid = '$tkn'";
		$result = mysqli_query($this->MyCon,$logoutqry)or die("Error in Query");

		unset($_SESSION["userid"]);
		unset($_SESSION["username"]);
		unset($_SESSION["LogId"]);
		unset($_SESSION["user_session_id"]);
		header("Location:login.php");			
	}
	
	function close_con()
	{
		mysqli_close($this->MyCon);		
	}
}
?>