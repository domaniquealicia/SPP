<?php get_header(); ?>

<div id="container">

	<div id="featurebanner"><?php the_post_thumbnail( 'page-feature' ); ?></div>

	<div id="content" class="left">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1 class="pageheader"><?php the_title(); ?></h1>

            <div class="pagecontent">
            
            <?php the_content(__("Read More", 'organicthemes'));?><div style="clear:both;"></div><?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p><?php endif; ?>
            
            </div>
            
        </div>
		
	</div>
			
<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>