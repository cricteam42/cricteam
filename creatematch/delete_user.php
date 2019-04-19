<?php
require_once("db.php");
$sql = "DELETE FROM scorecards WHERE date='" . $_GET["date"] ."'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>