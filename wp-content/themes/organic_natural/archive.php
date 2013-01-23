<?php get_header(); ?>

<div id="container">

	<div id="content" class="left">
    
		<div class="postarea">
        
        	<div class="postcontent">
	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                    
                <?php the_excerpt(); ?><div style="clear:both;"></div>
                
                <div class="postmeta">
                    <p><?php _e("Filed under", 'organicthemes'); ?> <?php the_category(', ') ?> &middot; <?php _e("Tagged with", 'organicthemes'); ?> <?php the_tags('') ?></p>
                </div>
                        
                <?php endwhile; else: ?>
                        
                <div class="pagination">
                	<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
                </div>
                
                <h3><?php _e("Page Not Found", 'organicthemes'); ?></h3>
                <p><?php _e("We're sorry, but the page you're looking for isn't here.", 'organicthemes'); ?></p>
                <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar", 'organicthemes'); ?></p>
    
                <?php endif; // do not delete ?>
            
            </div>
        
        </div>
	
	</div>
			
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>