<?php get_header(); ?>

<div id="container">

	<div id="content" class="left">
	
		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="postcontent">
            
            	<h1 class="postheader"><?php the_title(); ?></h1>
            	<a class="commenticon" href="<?php the_permalink(); ?>#comment" title="Comments"><?php comments_number(__("0", 'organicthemes'), __("1", 'organicthemes'), '%'); ?></a>
            	
            	<?php if(of_get_option('display_social') == '1') { ?>
            	<div class="social_links">
            	    <div class="tweet_btn">
            	        <a href="http://twitter.com/share" class="twitter-share-button"
            	        data-url="<?php the_permalink(); ?>"
            	        data-via="<?php echo of_get_option('social_twitter_name'); ?>"
            	        data-text="<?php the_title(); ?>"
            	        data-related=""
            	        data-count="horizontal"><?php _e("Tweet", 'organicthemes'); ?></a>
            	    </div>
            	    <div class="like_btn">
            	        <fb:like href="<?php echo urlencode(get_permalink($post->ID)); ?>" layout="button_count" show_faces="false" width="100" font=""></fb:like>
            	    </div>
            	    <div class="plus_btn">
            	    	<g:plusone size="medium"></g:plusone>
            	    </div>
            	</div>
            	<?php } else { ?>
            	<?php } ?>
			
				<?php the_content(__("Read More", 'organicthemes'));?><div style="clear:both;"></div>
                
                <div class="postmeta">
                	<p><?php _e("Tagged:", 'organicthemes'); ?> <?php the_tags('') ?></p>
                </div>
            
            </div>
			
		</div>
			
        <div class="postcomments">
			<?php comments_template('',true); ?>
        </div>

		<?php endwhile; else: ?>

		<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
		
		<?php endif; ?>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>