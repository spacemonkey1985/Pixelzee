<?php
	if($_SERVER['HTTP_HOST']=='localhost')
	{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = 'punkrock';
		$dbname = 'pixelzee';
	}
	else
	{
		$dbhost = 'localhost';
		$dbuser = 'scoulton';
		$dbpass = 'r8181055';
		$dbname = 'databases';
	}
	if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass)){
		echo mysqli_connect_error();
	}
	
	if(!mysqli_select_db($dbname, $conn)){
		echo mysqli_connect_error();
	}
?>