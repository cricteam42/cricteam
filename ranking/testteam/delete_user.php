<?php
require_once("db.php");
$sql = "DELETE FROM testteam WHERE Team_Name='" . $_GET["Team_Name"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>