<?php get_header(); ?>

<div id="container">

	<div id="content" class="left">
    
		<div class="postarea">
        
        	<div class="postcontent">
                
                <h3><?php _e("Not Found, Error 404", 'organicthemes'); ?></h3>
                <p><?php _e("The page you are looking for no longer exists.", 'organicthemes'); ?></p>
                
            </div>
            
        </div>
    
    </div>
			
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>