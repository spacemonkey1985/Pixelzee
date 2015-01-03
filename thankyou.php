<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="keywords" content="web design, app design, web development, app development" />
<meta name="description" content="Simple, creative web and app design." />
<title>Web and App design - Contact</title>
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
  
  function subscribe(){
		var form = document.getElementById('subscribe');
		var name = document.getElementById('sub_name');
		var email = document.getElementById('sub_email');
		
		var complete = 0;
		
		if(name.value != ''){
			complete += 1;
			name.style.border='1px solid #88d1ca';
		}
		else{
			name.style.border='1px dotted #c90a00';
		}
		
		if(email.value != ''){
			email.style.border='1px solid #88d1ca';
			
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			if (!filter.test(email.value)) {
				email.style.border='1px dotted #c90a00';
			}
			else{
				complete += 1;
				email.style.border='1px solid #88d1ca';
			}
		}
		else{
			email.style.border='1px dotted #c90a00';
		}
		
		if(complete == 2){
			form.submit();
		}
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
        
        	<img src="images/contact_caption.png" alt="Hello World! Thank you for taking the time to look at our site and for getting in touch with us. If you want to find out more or tell us about your project or ideas,we'd love to know and be involved." style="margin-top: 40px;" />
            
        </div>
    </div>
    
    <div class="main">
    	<div class="main-content">
            
            <div style="float: left;">
                <div>
                    <div class="contact-col1">
                        <h1>CONTACT US</h1>
                        <div class="cleaner">&nbsp;</div>
                        
                        For your convenience we've tried to offer as many ways to get in contact with us as possible. If you don't want to chat you can simply stay in touch by <b>following</b> us on <a href="https://www.twitter.com/pixelzeeinfo" target="_blank">Twitter</a> or <a href="http://www.facebook.com/pixelzeeinfo" target="_blank">Facebook</a>.
                    </div>
                    
                    <div class="contact-col2">
                        <h1>Thanks!</h1>
                        <?php
							if(isset($_GET['type'])){
								if($_GET['type'] == 'email'){
									echo("<b>Your message is on its way to us as you read this</b>. Remember we try to respond as soon as we can, <b>however if we don't reply back soon that doesn't mean that we won't</b>, it's just that we've not got round to your message yet. Don't worry, <b>we haven't forgotten about you!</b>");
								}
								else{
									echo("<b>You have been sucessfully added to our subscribers list</b>. If at anytime you would like to be removed please send us a quick <a href='mailto:info@pixelzee.com'>message</a> so that we can remove you from our records.");
								}
							}
							else{
								echo("<b>Your message is on its way to us as you read this</b>. Remember we try to respond as soon as we can, <b>however if we don't reply back soon that doesn't mean that we won't</b>, it's just that we've not got round to your message yet. Don't worry, <b>we haven't forgotten about you!</b>");
							}
	                        
                        ?>
						<h2>Going somewhere? Why not check out our blog before you go?</h2>
                        Our <a href="blog/">blog</a> contains some great articles and news snippets of our <b>projects, work or just general news and stuff that interests us</b>. Check out the list below, you might find something of interest.
                        
                        <div style="padding: 5px; background-color: #454041; margin-top: 30px;">
                        	<?php
                            	// Get the last 3 posts.
								require('blog/wp-blog-header.php');
                            ?>
                            
                            <ul>
                            <?php 
								$posts = get_posts('numberposts=5&order=DESC&orderby=the_date');
								foreach ($posts as $post) : start_wp(); ?>
								<li style="border-bottom: 1px solid #261C1C; margin-bottom: 15px;"><b><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></b><br />    
								<?php the_excerpt(); ?></li>
								<?php
								endforeach;
							?>
                            </ul>

                        </div>
                    </div>    
                </div>
                <div class="cleaner">&nbsp;</div>
                <div>
                    <div class="contact-col1" style="margin-top: 35px;">
                        
                    </div>
                    
                    <div class="contact-col2" style="margin-top: 35px;">                
                        
                    </div>
                </div>
            </div>
            
            <div class="contact-col3">
            	<img src="images/subscribe_title.png" alt="subscribe" style="margin-bottom: 15px;" />
                
                <form name="subscribe" id="subscribe" method="post" action="includes/subscribe.php">
                	<input type="text" name="sub_name" id="sub_name" value="Full name" />
                    <br />
                    <input type="text" name="sub_email" id="sub_email" value="Email address" />
                </form>
                
                <p>
                	Get monthly updates of projects completed, currently in progress and ones for the future. Find out what we've been upto and our next journey by subscribing to our monthly news letter.
                </p>
                
                <div class="subscribe-link">
                	Click here to <a href="javascript: subscribe();">subscribe now!</a>
                </div>
                
                <a href="https://www.twitter.com/pixelzeeinfo" target="_blank"><img src="images/twitter.png" alt="Follow us on Twitter" style="margin-top: 30px;" /></a>
                <a href="http://www.facebook.com/Pixelzee" target="_blank"><img src="images/fb.png" alt="Follow us on Facebook" style="margin-top: 15px;" /></a>
                
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
