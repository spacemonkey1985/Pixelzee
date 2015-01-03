<?php

	include('includes/db_connection.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="keywords" content="web design, app design, web development, app development" />
<meta name="description" content="Simple, creative web and app design." />
<title>Web and App design - Work</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<script type="text/javascript">
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33538748-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  function showElement(id){
		var element = document.getElementById(id);
		element.style.display = 'block';
	}
	function hideElement(id){
		var element = document.getElementById(id);
		element.style.display = 'none';
	}
</script>
</head>

<body>

	<div class="header">
    	<div class="header-content">
        
        	<a href="http://www.pixelzee.com"><img src="images/email_icon.png" alt="email" class="email-icon" /></a>
            
            |&nbsp;&nbsp;<a href="mailto: info@pixelzee.com">info@pixelzee.com</a>
        
        </div>
    </div>
    
    
    <div class="menu">
    	<div class="menu-content">
        
        	<a href="http://www.pixelzee.com"><img src="images/logo.png" alt="pixelzee" class="logo"  /></a>
            
            <?php include('includes/menu.php'); ?>
            
        </div>
    </div>
    
    
    <div class="caption">
    	<div class="caption-content">
        
        	<img src="images/work_caption.png" alt="We put in 110% effort into all our projects to create the most exciting and vibrant sites and apps possible. Each and every one of our projects have been a joy to complete. We hope you like them also." style="margin-top: 40px;" />
            
        </div>
    </div>
    
    <div class="main">
    	<div class="main-content">
            
            <div class="work-cols">
            	<h1>OUR WORK</h1>
                
                <div class="cleaner">&nbsp;</div>
            
				<?php
                    
                    $work = "SELECT * FROM pz_work ORDER BY Date desc;";
                                                
                    if(!$result = mysqli_query($work)){
                        echo mysqli_error();
                    }
                    else{
                        $i=1;
                        
                        while($row = mysqli_fetch_array($result)){
                            if($i%4 == 0){
                                echo("<div class='work-col-end'>");
                                echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");'><img src='" . $row['Thumbnail'] . "' alt='" . $row['Customer'] . "' style='margin-bottom: 10px;' /></a>");
                                echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");'><div class='thumb-overlay' id='thumb-overlay" . $row['ID'] . "' onmouseout='hideElement(\"thumb-overlay" . $row['ID'] . "\");'><div class='thumb-overlay-title'>READ MORE</div></div></a>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");' onmouseout='hideElement(\"thumb-overlay" . $row['ID'] . "\");'><h2>" . $row['Customer'] . "</h2></a>");
								echo($row['Description']);
								echo("</div>");
                            }
                            else{
                                echo("<div class='work-col'>");
                                echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");'><img src='" . $row['Thumbnail'] . "' alt='" . $row['Customer'] . "' style='margin-bottom: 10px;' /></a>");
                                echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");'><div class='thumb-overlay' id='thumb-overlay" . $row['ID'] . "' onmouseout='hideElement(\"thumb-overlay" . $row['ID'] . "\");'><div class='thumb-overlay-title'>READ MORE</div></div></a>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"thumb-overlay" . $row['ID'] . "\");' onmouseout='hideElement(\"thumb-overlay" . $row['ID'] . "\");'><h2>" . $row['Customer'] . "</h2></a>");
								echo($row['Description']);
								echo("</div>");
                            }
                            
                            $i++;
                        }
                    }	
    
                    mysqli_close($conn);
                
                ?>
            </div>
            
            <div class="cleaner">&nbsp;</div>
        	
        </div>
    </div>
    
    <div class="footer">
    	<div class="footer-content">
        	
            <?php include('includes/footer.php'); ?> 
        
        </div>
    </div>

</body>

</html>
