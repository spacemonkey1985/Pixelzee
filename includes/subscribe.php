<?php
	
	include('db_connection.php');
	
	if(isset($_POST['sub_name'])){
		if($_POST['sub_name'] != ''){
			$query = "INSERT INTO pz_subscribers(Fullname, Email) values('" . $_POST['sub_name'] . "', '" . $_POST['sub_email'] . "');";
		
			mysql_query($query);
		}
	}
	
	header("Location: ../thankyou.php?type=subscribe");
	
?>