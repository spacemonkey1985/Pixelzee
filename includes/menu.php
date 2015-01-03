<?php
	$page = "";
	$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);

	echo "<ul>";
	
	if(strtolower($page) == "index.php" || $page == ""){
		echo "<li class='current'><a href='index.php'>HOME</a></li>";
	}
	else{
		echo "<li><a href='index.php'>HOME</a></li>";
	}
	
	if(strtolower($page) == "about.php"){
		echo "<li class='current'><a href='about.php'>ABOUT</a></li>";
	}
	else{
		echo "<li><a href='about.php'>ABOUT</a></li>";
	}
	
	if(stristr(strtolower($_SERVER["REQUEST_URI"]), 'work') != ''){
		echo "<li class='current'><a href='work.php'>WORK</a></li>";
	}
	else{
		echo "<li><a href='work.php'>WORK</a></li>";
	}
	
	if(stristr(strtolower($_SERVER["SCRIPT_NAME"]), 'blog') != ''){
		echo "<li class='current'><a href='blog/'>BLOG</a></li>";
	}
	else{
		echo "<li><a href='blog/'>BLOG</a></li>";
	}
	
	if(strtolower($page) == "contact.php" || strtolower($page) == "thankyou.php"){
		echo "<li class='current'><a href='contact.php'>CONTACT</a></li>";
	}
	else{
		echo "<li><a href='contact.php'>CONTACT</a></li>";
	}
    
	echo "<div class='menu-end'></div>";
	echo "</ul>";
?>