<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicion.ico" />

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33538748-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentform").validate({
		rules: {
			author: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			comment: {
				required: true,
				minlength: 2
			}
		},
		messages: {
			author: "Required",
			email: "Required, valid",
			comment: ""
		}
	});
});
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>

	<!-- header part -->
    
	<div class="header">
    	<div class="header-content">
        
        	<a href="http://www.pixelzee.com"><img src="<?php bloginfo('template_url'); ?>/images/email_icon.png" alt="email" class="email-icon" /></a>
            
            |&nbsp;&nbsp;<a href="mailto: info@pixelzee.com">info@pixelzee.com</a>
        
        </div>
    </div>
    
    <div class="menu">
    	<div class="menu-content">
        
        	<a href="http://www.pixelzee.com"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="pixelzee" class="logo"  /></a>
            
            <ul>
            	<li><a href="../index.php">HOME</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../work.php">WORK</a></li>
                <li class="current"><a href="index.php">BLOG</a></li>
                <li><a href="../contact.php">CONTACT</a></li>
                <div class="menu-end"></div>
            </ul>
            
        </div>
    </div>
    
    
    <div class="caption">
    	<div class="caption-content">
        
        	<img src="<?php bloginfo('template_url'); ?>/images/blog_caption.png" alt="Welcome to our blog, here you'll find lots of information which has been gathered together based on our work, projects, interests or general things posted on the world wide web. Please feel free to comment!" style="margin-top: 40px;" />
            
        </div>
    </div>
    
    <!-- end header part -->