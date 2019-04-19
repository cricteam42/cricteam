<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
</head>
<body>
<table>
	<th>NAME</th><br>
	<th>RUNS</th><br>
	<th>BALLS</th><br>
	<th>FOUR</th><br>
	<th>SIX</th><br>
	<th>STRIKERATE</th><br>
	<th>AVERAGE</th><br>
	<th>WICKET</th><br>
	<th>BESTBOWL</th><br>
	<th>BOLWINGAVERAGE</th><br>
	<th>FIFTY</th><br>
	<th>HUNDRED</th><br>
	<th>HIGHSCORE</th><br>
	</table>
	<?php
 $con= mysqli_connect("localhost","root","","livecricket");
    
	$name = $_POST['name'];
	
  
   

$result = mysqli_query($con, "SELECT * FROM scorecard WHERE name LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{		
		echo  "<tr>";
	
		echo  "<td>";
		echo $row['name'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['balls'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['runs'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['four'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['six'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['strike'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['avg'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['wicket'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['bestbowl'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['bowlingavg'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['fifty'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['hundered'];
		echo  "</td>";
		echo "<br>";
		echo  "<td>";
		echo $row['highscore'];
		echo  "</td>";
		echo "<br>";
        echo  "</tr>";
        echo "<br>";
	
		
}
    mysqli_close($con);
    ?>

</body>
</html>