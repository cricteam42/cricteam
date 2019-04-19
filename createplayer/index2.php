<!doctype html>
<html>
<head>
    <?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
    	$team=$_POST['team'];
    	$pname=$_POST['pname'];
    	$runs=$_POST['runs'];
    	$balls=$_POST['balls'];
    	$four=$_POST['four'];
    	$six=$_POST['six'];
    	$strike=$_POST['strike'];
    	$avg=$_POST['avg'];
    	$fifty=$_POST['fifty'];
    	$hundered=$_POST['hundered'];
    	$wicket=$_POST['wicket'];
    	$bestbowl=$_POST['bestbowl'];
    	$bowlingavg=$_POST['bowlingavg'];
    	$highscore=$_POST['highscore'];
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $query = "insert into images (name,image,team,pname,runs,balls,four,six,strike,avg,fifty,hundered,wicket,bestbowl,bowlingavg,highscore) values ('".$name."','".$image."','".$team."','".$pname."','".$runs."','".$balls."','".$four."','".$six."','".$strike."','".$avg."','".$fifty."','".$hundered."','".$wicket."','".$bestbowl."','".$bowlingavg."','".$highscore."')";
            
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }
    
    }
    ?>

<body>
   <a href="index.php">Update AND Delete Player Details</a><br><br>
    <form method="post" action="" enctype='multipart/form-data'>
        
        <input type='file' name='file' /><br><br>
<tr>
<td><label>Player Team:</label></td>
<td><input type="text" name="team" class="txtField"></td>
</tr><br><br>

<tr>
<td><label>Player Name:</label></td>
<td><input type="text" name="pname" class="txtField"></td>
</tr><br><br>
<tr>
<td><label>Enter Runs:</label></td>
<td><input type="text" name="runs" class="txtField"></td>
</tr><br><br>
<tr>
<td><label>Enter Balls:</label></td>
<td><input type="text" name="balls" class="txtField"></td>
</tr><br><br>
<tr>
<td><label>Enter Fours:</label></td>
<td><input type="text" name="four" class="txtField"></td>
</tr><br><br>
<td><label>Enter Six:</label></td>
<td><input type="text" name="six" class="txtField"></td>
</tr><br><br>
<td><label>Enter Strike:</label></td>
<td><input type="text" name="strike" class="txtField"></td>
</tr><br><br>
<td><label>Enter Average:</label></td>
<td><input type="text" name="avg" class="txtField"></td>
</tr><br><br>
<td><label>Enter Fifty:</label></td>
<td><input type="text" name="fifty" class="txtField"></td>
</tr><br><br>
<td><label>Enter Hundred:</label></td>
<td><input type="text" name="hundered" class="txtField"></td>
</tr><br><br>
<td><label>Enter Wicket:</label></td>
<td><input type="text" name="wicket" class="txtField"></td>
</tr><br><br>
<td><label>Enter BestBowl:</label></td>
<td><input type="text" name="bestbowl" class="txtField"></td>
</tr><br><br>
<td><label>Enter BowlingAverage:</label></td>
<td><input type="text" name="bowlingavg" class="txtField"></td>
</tr><br><br>
<td><label>Enter Highscore:</label></td>
<td><input type="text" name="highscore" class="txtField"></td>
</tr><br><br>

        <input type='submit' value='Submit' name='but_upload'>
        
    </form>
<?php
include('index.php');
?>
</body>
</html>
