	<?php get_header(); ?>

	<!-- main -->
    
    <div id="main" class="main">
    	<div class="main-content">
        	<h1>BLOG</h1>
            <div class="cleaner"></div>
                
            <div style="float: left; width: 560px;">
        	<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
                <div <?php post_class() ?>>
                    
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumb">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <?php endif; ?>
                    
                    <div style="background-color: #454041;">
                    	<?php the_excerpt(); ?>
                    </div>
                    
                    <div class="post-meta">
                        <ul>
                            <li style="border: none;"><?php the_time('F jS, Y') ?></li>
                            <li>Posted in <?php the_category(', ') ?></li>
                            <li><?php comments_number('No Comments','1 Comment','% Comments'); ?></li>
                        </ul>
                    </div>
                    
                </div>
            
            <?php endwhile; ?>
            
            <div class="pagination">
                <ul>
                    <li class="older" style="border: none;"><?php next_posts_link('Older') ?></li>
                    <li class="newer"><?php next_posts_link('Newer') ?></li>
                </ul>
            </div>
            
            <?php else : ?>
            
            	<div style="float: left; width: 560px; margin-left: 50px; margin-top: 50px;">
                    <h2>Nothing Found</h2>
                    <p>Sorry, but there are no current blogs to be found here.</p>
                    <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
                </div>
                
            <?php endif; ?>
            
            </div>
            
            <div class="side-bar" style="margin-top: 0px;">
            	<?php get_sidebar(); ?>
            </div>
            
            <div class="cleaner"></div>
        
        </div>
    </div>
    
    <!-- end main -->
    
    <?php get_footer(); ?>