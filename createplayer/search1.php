<html>
<head>
<title>Player details</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<table border="2" cellpadding="10" cellspacing="1" width="500" >

<?php
 $con= mysqli_connect("localhost","root","","usertable");
    
	$pname = $_POST['pname'];
	$result = mysqli_query($con, "SELECT * FROM images WHERE pname LIKE '%{$pname}%'");
		echo"<h1><u>PLAYER PROFILE</u></h1>";
while ($row = mysqli_fetch_array($result))
{		
		?>
		
		<img src="<?php echo $row["image"] ?>" height="175" width="200"><br>
		
		<?php 
		echo  "<tr style=text-align:left;>";
		echo "<th>TEAM</th>";
		echo  "<td>";
		echo $row['team'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo "<th>MATCH</th>";
		echo  "<td>";
		echo $row['match'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo "<th>NAME</th>";
		echo  "<td>";
		echo $row['pname'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>RUNS</th>";
		echo  "<td>";
		echo $row['runs'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>BALLS</th>";
		echo  "<td>";
		echo $row['balls'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>FOUR</th>";
		echo  "<td>";
		echo $row['four'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>SIX</th>";
		echo  "<td>";
		echo $row['six'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>STRIKERATE</th>";
		echo  "<td>";
		echo $row['strike'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>AVERAGE</th>";
		echo  "<td>";
		echo $row['avg'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>FIFTY</th>";
		echo  "<td>";
		echo $row['fifty'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>HUNDRED</th>";
		echo  "<td>";
		echo $row['hundered'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>WICKET</th>";
		echo  "<td>";
		echo $row['wicket'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>BESTBOWL</th>";
		echo  "<td>";
		echo $row['bestbowl'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>BOWLINGAVERAGE</th>";
		echo  "<td>";
		echo $row['bowlingavg'];
		echo  "</td>";
		echo  "</tr>";
		
		
		echo  "<tr style=text-align:left;>";
		echo"<th>HIGHSCORE</th>";
		echo  "<td>";
		echo $row['highscore'];
		echo  "</td>";
        echo  "</tr>";
        
        echo "<br>";
	
		
}
    mysqli_close($con);
    ?>

</html>