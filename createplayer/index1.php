<?php
$db_hostname = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_database = 'livecricket';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']); 
$sql = "SELECT * FROM scorecard WHERE name LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 

while ($row = mysql_fetch_array($r_query)){  
    echo 'name: ' .$row['name'];
    echo '<br /> runs: ' .$row['runs'];
    echo '<br /> balls: '.$row['balls'];
    echo '<br /> four: '.$row['four'];
	echo '<br /> six: '.$row['six'];
	echo '<br /> strike: '.$row['strike'];
	echo '<br /> avg: '.$row['avg'];
    echo '<br /> wicket: '.$row['wicket'];
	echo '<br /> bestbowl: '.$row['bestbowl'];
	echo '<br /> bowlingavg: '.$row['bowlingavg'];
	echo '<br /> fifty: '.$row['fifty'];
	echo '<br /> hundered: '.$row['hundered'];
	echo '<br /> highscore: '.$row['highscore'];  
}  

}
?>
    </body>
</html>