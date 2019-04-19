
<?php
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" value="upload">
<?php
	$files = scandir("uploads");
	for ($a = 2; $a < count($files); $a++) {
?>
<p>
<a  href= "uploads/<?php echo $files[$a]?>"><?php echo $files[$a]?></a>
</p>
<?php
}
?>