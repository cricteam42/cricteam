<html>
<head>
<title>Player details</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">

<?php
 $con= mysqli_connect("localhost","root","","usertable");
    
	$result = mysqli_query($con, "SELECT pname,team FROM images WHERE team='india'");
		echo"<h1>PLAYER PROFILE</h1>";
while ($row = mysqli_fetch_array($result))
{		
		?>

		<?php 
		
echo  "<tr style=text-align:left;>";
		echo "<th>NAME</th>";
		echo  "<td>";
		echo $row['pname'];
		echo  "</td>";
		echo  "</tr>";
		
		echo  "<tr style=text-align:left;>";
		echo"<th>TEAM</th>";
		echo  "<td>";
		echo $row['team'];
		echo  "</td>";
		echo  "</tr>";
	
		
}
    mysqli_close($con);
    ?>

</html>