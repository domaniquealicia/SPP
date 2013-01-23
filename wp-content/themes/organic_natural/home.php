<?php get_header(); ?>

<div id="container">

	<?php if(of_get_option('display_slider') == '1') { ?>
    <div id="homeslider">
    
        <ul id="slider1">
            <?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_slider'),'posts_per_page'=>of_get_option('postnumber_slider'))); ?>
            <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
            <?php global $more; $more = 0; ?>
            <li>
                <?php if ( $video ) : ?>
                    <div class="feature_video"><?php echo $video; ?></div>
                <?php else: ?>
                    <a class="feature_img" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-feature' ); ?></a>
                <?php endif; ?>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </li>
            <?php endwhile; ?>
            <?php else : // do not delete ?>
    		<?php endif; // do not delete ?>
        </ul>
        
    </div>
    <?php } else { ?>
    <?php } ?>
    
    <?php if(of_get_option('display_teasers') == '1') { ?>
    <div id="hometeaser">
    	
    	<?php $wp_query = new WP_Query(array('cat'=>of_get_option('select_categories_teaser'),'posts_per_page'=>of_get_option('number_display_teaser'))); ?>
        <?php $post_class = 'first'; ?>
        <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php global $more; $more = 0; ?>
        
        <div class="teaser <?php echo $post_class; ?>">
        
        	<?php
                if ('first' == $post_class){
                  $post_class = 'second';
                }elseif ('second' == $post_class){
                  $post_class = 'third';
                }else{
                  $post_class = 'first';
                }
            ?>
            
            <a class="teaserthumb" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-teaser' ); ?></a>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <a class="more-link" href="<?php the_permalink() ?>"><?php _e("Read More", 'organicthemes'); ?></a>
        </div>
        
        <?php endwhile; ?>
        <?php else : // do not delete ?>
        <?php endif; // do not delete ?>
        
    </div>
    <?php } else { ?>
    <?php } ?>
    
    <?php if(of_get_option('display_homeblog') == '1') { ?>
    <div id="content" class="home">
        
        <div id="homeright">
        
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) : ?>
				<div class="widget">
					<h4><?php _e("Widget Area", 'organicthemes'); ?></h4>
					<p><?php _e("This section is widgetized. To add widgets here, go to the", 'organicthemes'); ?> <a href="<?php echo admin_url(); ?>widgets.php"><?php _e("Widgets", 'organicthemes'); ?></a> <?php _e("panel in your WordPress admin, and add the widgets you would like to the", 'organicthemes'); ?> <strong><?php _e("Homepage Top Right", 'organicthemes'); ?></strong>.</p>
					<p><small><?php _e("*This message will be overwritten after widgets have been added", 'organicthemes'); ?></small></p>
				</div>
            <?php endif; ?>
            
        </div> 
        
        <div id="homeleft">
            
            <?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_home'),'posts_per_page'=>of_get_option('postnumber_home'),'paged'=>$paged)); ?>
            <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
            <?php global $more; $more = 0; ?>
            
            	<div class="postarea">
                	
                    <div class="posttitle">
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    	<a class="commenticon" href="<?php the_permalink(); ?>#comment" title="Comments"><?php comments_number(__("0", 'organicthemes'), __("1", 'organicthemes'), '%'); ?></a>
                    </div>
                    <div class="homecontent">
                    	<?php if ( $video ) : ?>
                    		<div class="video"><?php echo $video; ?></div>
                    	<?php else: ?>
                    	    <a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                    	<?php endif; ?>
                    	<?php the_excerpt(); ?>
                        <a class="more-link" href="<?php the_permalink() ?>"><?php _e("Read More", 'organicthemes'); ?></a>
                    </div>
                    
                </div>
                    
            <?php endwhile; ?>
            
            <div class="pagination">
            	<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
            </div>
            
            <?php else : // do not delete ?>
            <?php endif; // do not delete ?>

        </div>                         
        
	</div>
	<?php } else { ?>
	<?php } ?>

</div>

<?php get_footer(); ?>