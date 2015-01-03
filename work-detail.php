<?php

	include('includes/db_connection.php');
	
	$customer = "";
	$date = "";
	$site = "";
	$description = "";
	$feedback = "";
	$feedback_name = "";
	$feedback_title =  "";
	
	if(isset($_GET['id'])){
		$user = "SELECT * FROM pz_work WHERE ID = " . $_GET['id'] . ";";
										
		if(!$result = mysql_query($user)){
			echo mysql_error();
		}
		else{
			while($row = mysql_fetch_array($result)){	
				$customer = $row['Customer'];
				$date = date_create($row['Date']);
				$site = $row['Site'];
				$description = $row['Description'];
				$feedback = $row['Feedback'];
				$feedback_name = $row['FeedbackName'];
				$feedback_title =  $row['FeedbackTitle'];
			}
		}	
	}
	
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
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
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
	$(window).load(function() {
		$('#slider-work').nivoSlider({
			effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
								//sliceDown
								//sliceDownLeft
								//sliceUp
								//sliceUpLeft
								//sliceUpDown
								//sliceUpDownLeft
								//fold
								//fade
								//random
								//slideInRight
								//slideInLeft
								//boxRandom
								//boxRain
								//boxRainReverse
								//boxRainGrow
								//boxRainGrowReverse
			slices: 15, // For slice animations
			boxCols: 8, // For box animations
			boxRows: 4, // For box animations
			animSpeed: 700, // Slide transition speed
			pauseTime: 5000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			directionNavHide: false, // Only show on hover
			controlNav: false, // 1,2,3... navigation
			controlNavThumbs: false, // Use thumbnails for Control Nav
			controlNavThumbsFromRel: false, // Use image rel for thumbs
			controlNavThumbsSearch: '.jpg', // Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
			keyboardNav: true, // Use left & right arrows
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: false, // Force manual transitions
			captionOpacity: 0.8, // Universal caption opacity
			prevText: 'Prev', // Prev directionNav text
			nextText: 'Next', // Next directionNav text
			randomStart: false, // Start on a random slide
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
		});
	});	
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
            
				<div class="work-detail-col1">
                	<h2><?php echo $customer; ?></h2>
                    <h3>Launched <?php echo date_format($date, 'F Y'); ?> / <a href="<?php echo $site; ?>" target="_blank">View Site</a></h3>
                    <?php echo $description; ?>
                    <h4>Customer Feedback</h4>
                    <i>&quot;<?php echo $feedback; ?>&quot;</i>
                    <br /><br />
                    <b><?php echo $feedback_name; ?></b>
                    <br />
                    <?php echo $feedback_title; ?>
                    
                    <h4>Services Provided</h4>
                    
                    <ul>
                    <?php
						
						$services = "SELECT * FROM pz_work_services WHERE WorkID = " . $_GET['id'] . ";";
                                                
						if(!$result = mysql_query($services)){
							echo mysql_error();
						}
						else{
							while($row = mysql_fetch_array($result)){
								echo("<li>" . $row['Service'] . "</li>");
							}
						}	
						
					?>
                    </ul>
                    
                </div>
                
                <div class="work-detail-col2">
                    <div id="slider-work" class="nivoSlider-work">
                        <?php
                            
                            $images = "SELECT * FROM pz_work_gallery WHERE WorkID = " . $_GET['id'] . ";";
                                                    
                            if(!$result = mysql_query($images)){
                                echo mysql_error();
                            }
                            else{
                                while($row = mysql_fetch_array($result)){
                                    echo("<img src='" . $row['Image'] . "' />");
                                }
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="cleaner">&nbsp;</div>
        	
            <div class="work-cols">
            	<h1>OTHER WORK</h1>
                <div class="cleaner">&nbsp;</div>
                
                <?php
				
					$work = "SELECT * FROM pz_work ORDER BY Date desc;";
                                                
					if(!$result = mysql_query($work)){
						echo mysql_error();
					}
					else{
						while($row = mysql_fetch_array($result)){
							if($row['ID'] == $_GET['id']){
								echo("<div class='other-work'>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "'><img src=" . $row['Thumbnail'] . " /></a>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "'><div class='small-thumb-overlay-selected'><div class='small-thumb-overlay-title'>" . $row['Customer'] ."</div></div></a>");
								echo("</div>");

							}
							else{
								echo("<div class='other-work'>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"small-thumb-overlay" . $row['ID'] . "\");'><img src=" . $row['Thumbnail'] . " /></a>");
								echo("<a href='work-detail.php?id=" . $row['ID'] . "' onmouseover='showElement(\"small-thumb-overlay" . $row['ID'] . "\");'><div class='small-thumb-overlay' id='small-thumb-overlay" . $row['ID'] . "' onmouseout='hideElement(\"small-thumb-overlay" . $row['ID'] . "\");'><div class='small-thumb-overlay-title'>" . $row['Customer'] ."</div></div></a>");
								echo("</div>");
							}
						}
					}	
	
					mysql_close($conn);
					
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
