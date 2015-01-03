	<?php get_header(); ?>

	<!-- main -->
    
    <div id="main" class="main">
    	<div class="main-content">
        	<h1>BLOG</h1>
            <div class="cleaner"></div>
                
        	<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <div class="post">
                    
                    <h2 class="title"><?php the_title(); ?></h2>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumb">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <?php endif; ?>
                    
                    <div style="background-color: #454041;">
                    	<?php the_content(); ?>
                    </div>
                    
                </div>
            
            <?php endwhile; ?>
                
            <?php endif; ?>
            
            <?php get_sidebar(); ?>
            
            <div class="cleaner"></div>
        
        </div>
    </div>
    
    <!-- end main -->
    
    <?php get_footer(); ?>