<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'usertable');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	
	// if (isset($_POST['submit1'])) 
		$matmin1 = mysqli_real_escape_string($con,$_POST['Matchesmin1']);
		$ingmin1 = mysqli_real_escape_string($con,$_POST['Inningsmin1']);
		$hsmin1 = mysqli_real_escape_string($con,$_POST['HSmin1']);
		$runsmin1 = mysqli_real_escape_string($con,$_POST['Runsmin1']);
		$bfmin1 = mysqli_real_escape_string($con,$_POST['BFmin1']);
		$avgmin1 = mysqli_real_escape_string($con,$_POST['Averagemin1']);
		$fiftymin1 = mysqli_real_escape_string($con,$_POST['Fiftiesmin1']);
		$hundredmin1 = mysqli_real_escape_string($con,$_POST['Centuriesmin1']);
		$duckmin1 = mysqli_real_escape_string($con,$_POST['Ducksmin1']);
		$nomin1 = mysqli_real_escape_string($con,$_POST['NOmin1']);
		$srmin1 = mysqli_real_escape_string($con,$_POST['SRmin1']);

		$matmax1 = mysqli_real_escape_string($con,$_POST['Matchesmax1']);
		$ingmax1 = mysqli_real_escape_string($con,$_POST['Inningsmax1']);
		$hsmax1 = mysqli_real_escape_string($con,$_POST['HSmax1']);
		$runsmax1 = mysqli_real_escape_string($con,$_POST['Runsmax1']);
		$bfmax1 = mysqli_real_escape_string($con,$_POST['BFmax1']);
		$avgmax1 = mysqli_real_escape_string($con,$_POST['Averagemax1']);
		$fiftymax1 = mysqli_real_escape_string($con,$_POST['Fiftiesmax1']);
		$hundredmax1 = mysqli_real_escape_string($con,$_POST['Centuriesmax1']);
		$duckmax1 = mysqli_real_escape_string($con,$_POST['Ducksmax1']);
		$nomax1 = mysqli_real_escape_string($con,$_POST['NOmax1']);
		$srmax1 = mysqli_real_escape_string($con,$_POST['SRmax1']);

	
		$query="SELECT * FROM batting WHERE (Mat BETWEEN '$matmin1' AND '$matmax1') AND(Inns BETWEEN '$ingmin1' AND '$ingmax1') AND(HS BETWEEN '$hsmin1' AND '$hsmax1') AND(50s BETWEEN '$fiftymin1' AND '$fiftymax1') AND(100s BETWEEN '$hundredmin1' AND '$hundredmax1') AND(Ave BETWEEN '$avgmin1' AND '$avgmax1') AND(BF BETWEEN '$bfmin1' AND '$bfmax1') AND(Runs BETWEEN '$runsmin1' AND '$runsmax1') AND(0s BETWEEN '$duckmin1' AND '$duckmax1') AND(SR BETWEEN '$srmin1' AND '$srmax1') AND(NO BETWEEN '$nomin1' AND '$nomax1' ) ORDER BY Runs DESC ";
		$result=mysqli_query($con,$query);
		$result2=mysqli_query($con,$query);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Batting</title>
	<style type="text/css">
	.form-style-5{
		min-width: 500px;
		max-width: 900px;
		padding: 10px 20px;
		background: #f4f7f8;
		margin: 10px auto;
		padding: 20px;
		background: #f4f7f8;
		border-radius: 8px;
		/*font-family: Georgia, "Times New Roman", Times, serif;*/
	}
	.form-style-5 fieldset{
		border: none;
	}
	.form-style-5 legend {
		font-size: 1.4em;
		margin-bottom: 10px;
	}

	.form-style-5 label {
		display: block;
		font-size: 0.8em;
		text-align: center;
		text-shadow: 0 1px 0 rgba(255,255,255,0.2);
		margin-bottom: 8px;
	}
	.form-style-5 input[type="text"],
	.form-style-5 input[type="date"],
	.form-style-5 input[type="datetime"],
	.form-style-5 input[type="email"],
	.form-style-5 input[type="number"],
	.form-style-5 input[type="search"],
	.form-style-5 input[type="time"],
	.form-style-5 input[type="url"],
	.form-style-5 textarea,
	.form-style-5 select {
		font-family: Georgia, "Times New Roman", Times, serif;
		background: rgba(255,255,255,.1);
		border: none;
		height:29px;
		max-width: 130px;
		border-radius: 1px;
		font-size: 14px;
		margin: 0;
		outline: 0;
		padding: 2px;
		width: 100%;
		box-sizing: border-box; 
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box; 
		background-color: #e8eeef;
		color:#8a97a0;
		-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
		box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
		/*margin-bottom: 30px;*/
		
	}
	.form-style-5 input[type="text"]:focus,
	.form-style-5 input[type="date"]:focus,
	.form-style-5 input[type="datetime"]:focus,
	.form-style-5 input[type="email"]:focus,
	.form-style-5 input[type="number"]:focus,
	.form-style-5 input[type="search"]:focus,
	.form-style-5 input[type="time"]:focus,
	.form-style-5 input[type="url"]:focus,
	.form-style-5 textarea:focus,
	.form-style-5 select:focus{
		background: #8eb9ff;
		color: BLACK;
	}
	.form-style-5 select{
		-webkit-appearance: menulist-button;
		height:35px;
	}
	.form-style-5 .number {
		background: #1abc9c;
		color: #fff;
		height: 29px;
		
		display: inline-block;
		font-size: 0.8em;
		margin-right: 4px;
		line-height: 30px;
		text-align: center;
		text-shadow: 0 1px 0 rgba(255,255,255,0.2);
		border-radius: 15px 15px 15px 0px;
	}

	.form-style-5 input[type="submit"],
	.form-style-5 input[type="button"]
	{
		position: relative;
		display: block;
		padding: 19px 39px 18px 39px;
		color: #FFF;
		margin: 0 auto;
		background: #1abc9c;
		font-size: 18px;
		text-align: center;
		font-style: normal;
		width: 100%;
		border: 1px solid #16a085;
		border-width: 1px 1px 3px;
		margin-bottom: 10px;
	}
	.form-style-5 input[type="submit"]:hover,
	.form-style-5 input[type="button"]:hover
	{
		background: #109177;
	}
	.form-style-5 tr
	{
		height:29px; 
		vertical-align:middle;
	}

	</style>
</head>
<body style="background-color: #675b5b;">
<div class="form-style-5">

<?php
		if(empty($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))) echo "<h4>No Details Found</h4>";
		else{
		$i = 0;
		echo '<table cellpadding="0" cellspacing="0" border="1" align="center" width="100%">';
		while($row = $result2->fetch_assoc())
		{
		    if ($i == 0) {
		      $i++;
		      echo '<tr align="center">';
		      foreach ($row as $key => $value) {
		        echo "<th><b>" . $key . "</th></b>";
		      }
		      echo "</tr>";
		    }
		    echo '<tr align="center" style="font-size: 14px; color: #333333; padding:4px 0px; border-bottom:1px solid #b2b2b2;">';
		    foreach ($row as $value) {
		      echo "<td>" . $value . "</td>";
		    }
		    echo "</tr>";
		}
		echo "</table>";
	}
?>
</div>
</body>
</html>

