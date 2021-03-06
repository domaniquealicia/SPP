<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="container">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="left">
						
		<?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_blog'),'posts_per_page'=>of_get_option('postnumber_blog'),'paged'=>$paged)); ?>
		<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php global $more; $more = 0; ?>
        
        <div class="postarea blog">
        
        	<div class="posttitle">
        	
	            <div class="datebox">
	                <div class="month"><?php the_time(__("M", 'organicthemes')) ?></div>
	                <div class="day"><?php the_time(__("j", 'organicthemes')) ?></div>
	            </div>
	            
	            <a class="commenticon" href="<?php the_permalink(); ?>#comment" title="Comments"><?php comments_number(__("0", 'organicthemes'), __("1", 'organicthemes'), '%'); ?></a>
	            
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="postauthor">
					<p><?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?>&nbsp;<?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?></p>      
				</div>
				
			</div>
            
            <?php the_content(__("Read More", 'organicthemes')); ?><div style="clear:both;"></div>
        
        </div>
						
		<?php endwhile; ?>
		
		<div class="pagination">
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
	
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>
		
</div>

<?php get_footer(); ?>