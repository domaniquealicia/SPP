<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<div id="container">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>
	
	<div id="content" class="wide">
	
		<div class="postarea">
            
            <?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_portfolio'),'posts_per_page'=>of_get_option('postnumber_portfolio'),'paged'=>$paged)); ?>
			<?php $post_class = 'first'; ?>
            <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
            <?php global $more; $more = 0; ?>
            
            <div class="portfoliopost <?php echo $post_class; ?>">
            
				<?php
                    if ('first' == $post_class){
                      $post_class = 'second';
                    }elseif ('second' == $post_class){
                      $post_class = 'third';
                    }else{
                      $post_class = 'first';
                    }
                ?>
                
                <?php if ( $video ) : ?>
                	<div class="portfoliovideo"><?php echo $video; ?></div>
                <?php else: ?>
                    <div class="portfolioimg"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'portfolio' ); ?></a></div>
                <?php endif; ?>
             
                <h2 class="portfoliotitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            
            </div>
							
			<?php endwhile; ?>
            
            <div id="pagination">
				<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
            </div>
            
            <?php else : // do not delete ?>
            
            <div class="postcontent">

	            <h3><?php _e("Page Not Found", 'organicthemes'); ?></h3>
	            <p><?php _e("We're sorry, but the page you're looking for isn't here.", 'organicthemes'); ?></p>
	            <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar", 'organicthemes'); ?></p>
            
            </div>

			<?php endif; // do not delete ?>
		
		</div>
		
	</div>
		
</div>

<?php get_footer(); ?>