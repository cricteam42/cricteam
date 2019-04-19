<?php
require_once("db.php");
$sql = "DELETE FROM odiar WHERE player_name='" . $_GET["player_name"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>