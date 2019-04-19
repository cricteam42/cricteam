<?php
require_once("db.php");
$sql = "DELETE FROM images WHERE pname='" . $_GET["pname"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>