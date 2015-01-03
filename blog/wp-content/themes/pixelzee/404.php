	<?php get_header(); ?>

	<!-- main -->
    
    <div id="main" class="main">
    	<div class="main-content">
        	<h1>BLOG</h1>
            <div class="cleaner"></div>
                
            <div style="float: left; width: 560px;">
            
            	<div style="float: left; width: 560px; margin-left: 50px; margin-top: 50px;">
                    <h2>Nothing Found</h2>
                    <p>Sorry, but there are no current blogs to be found here.</p>
                    <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
                </div>
            
            </div>
            
            <div class="side-bar" style="margin-top: 0px;">
            	<?php get_sidebar(); ?>
            </div>
            
            <div class="cleaner"></div>
        
        </div>
    </div>
    
    <!-- end main -->
    
    <?php get_footer(); ?>