<?php
require_once("db.php");

$result = mysqli_query($conn,$qry);
if (mysqli_num_rows($result) == 0) 
			{
?>
<?php
            } 
            else 
            {
                while ($row = mysqli_fetch_array($result)) 
                {
                	?>
                <div style="background-color:lightblue; width:300px;height:200px;text-align: center;"><br><br>
                	<a href="team_view.php?team_id=<?php echo $row["team_id"];?> <?php  echo $row["country_name"] ?>">India</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="team_view.php?team_id=<?php echo $row["team_id"];?> <?php  echo $row["country_name"] ?>">Pakistan</a>
                	</div>
                <?php	
                }
                	
              }
?>