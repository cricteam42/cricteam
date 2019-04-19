<?php
require_once("db.php");
$sql = "DELETE FROM t20bat WHERE player_name='" . $_GET["player_name"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>