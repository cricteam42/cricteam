<html>
<head>
<title>Player details</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">

<?php
 $con= mysqli_connect("localhost","root","","usertable");
    
	$image = $_POST['image'];
	$result = mysqli_query($con, "SELECT * FROM images WHERE image LIKE '%{$image}%'");
		echo"<h1>PLAYER PROFILE</h1>";
while ($row = mysqli_fetch_array($result))
{		
		?>
		<img src="<?php echo $row["image"] ?>" height="150" width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php 
		

        
        echo "";
	
		
}
    mysqli_close($con);
    ?>

</html>