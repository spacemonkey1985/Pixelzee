<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="keywords" content="web design, app design, web development, app development" />
<meta name="description" content="Simple, creative web and app design." />
<title>Web and App design - Home</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33538748-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<script type="text/javascript">			
		$.getJSON("https://api.twitter.com/1/statuses/user_timeline.json?screen_name=pixelzeeinfo&count=3",
			function(data){
				$.each(data, function(i,item){
					ct = item.text;
					mytime = item.created_at;
					var strtime = mytime.replace(/(\+\S+) (.*)/, '$2 $1')
					var mydate = new Date(Date.parse(strtime)).toLocaleDateString();
					var mytime = new Date(Date.parse(strtime)).toLocaleTimeString();		
	
					ct = ct.replace(/http:\/\/\S+/g,  '<a href="$&" target="_blank">$&</a>');
					ct = ct.replace(/\s(@)(\w+)/g,    ' @<a href="http://twitter.com/$2" target="_blank">$2</a>');
					ct = ct.replace(/\s(#)(\w+)/g,    ' #<a href="http://search.twitter.com/search?q=%23$2" target="_blank">$2</a>');
					$("#jstweets").append('<div style="margin-bottom: 10px;">'+ct + " <small><i>(" + mydate + " @ " + mytime + ")</i></small></div><div style='height: 10px; border-top: 1px solid #454041;'></div>");
				});
			});
	</script>

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
    
    
    <div class="home-caption">
    	<div class="home-caption-content">
        
        	<div class="tag-line">
            	
                <img src="images/tag_line.png" alt="Simple, creative web &amp; app design" style="margin-bottom: 20px;" />
                Creating userfriendly websites and apps for your needs
                
            </div>
            
            <img src="images/sample_work_01.png" alt="Sample Work" style="position: relative; float: right; margin-right: 30px; margin-top: 25px;" />
            
            <div class="cleaner">&bnsp;</div>
            
            <a href="about.php"><img src="images/learn_more_btn.png" alt="Learn more" style="postion: relative; float: left; margin-top: -20px; margin-left: 65px;" /></a>
            <a href="contact.php"><img src="images/contact_us_btn.png" alt="Get in touch" style="postion: relative; float: left; margin-top: -20px; margin-left: 20px;" /></a>
            
        </div>
    </div>
    
    <div class="cleaner">&bnsp;</div>
    
    <div class="main">
    	<div class="main-content">    	
            
        	<div class="home-col1">
            	<h1>Design. Create. Build.</h1>
                <p>
                	We're a small company that specializes in web and app design. We have an <a href="about.php">expert skill set</a> to design, create and build beautiful websites and mobile apps that are simple and userfriendly. Why not check out <a href="work.php">our work</a> we've done for our other customers or the <a href="about.php">services we offer</a>.
                    <br /><br />
                    See what we're all <a href="about.php">about</a>.
                </p>
            </div>
            
            <div class="home-col2">
            	<img src="images/hire_us_title.png" alt="Hire us" style="margin-bottom: 15px;" />
                We're currently available to take on projects <b>now</b>.
                <br /><br />
                If you've got an idea for a site or app then please <a href="contact.php">get in touch</a> - we'd love to help you.
            </div>
            
            <div class="home-col3">
            	<img src="images/twitter_title.png" alt="On Twitter" style="margin-bottom: 15px;" />
                
                <div id="jstweets" class="twitter"></div>
            
            	<div class="twitter-link">
                	Follow us on Twitter as <a href="https://twitter.com/pixelzeeinfo" target="_blank">@pixelzeeinfo</a>
                </div>
                
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
