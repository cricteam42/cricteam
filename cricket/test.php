<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'cricketdb');
	define('DB_USER','root');
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
	if(!$con) {echo "error";die("Failed to connect to MySQL: " . mysqli_connect_error());}
	else {echo "success";}
	?>