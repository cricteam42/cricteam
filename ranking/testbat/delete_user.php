<?php
require_once("db.php");
$sql = "DELETE FROM testbat WHERE Player_Name='" . $_GET["Player_Name"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>