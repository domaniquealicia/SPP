<div style="clear:both;"></div>

<div id="footertop">
    
        <div id="footerwidgets">
            
            <div class="footerwidget left">      
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
                <?php endif; ?>        
            </div>
                
            <div class="footerwidget midleft">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Left') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidget midright">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Right') ) : ?>
                <?php endif; ?>
            </div>
                
            <div class="footerwidget right">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>   
                <?php endif; ?>
            </div>
                
        </div>
    
    </div>
    
    <div id="footerbottom">
    
        <div id="footer">

            <div class="footerright">
                <a href="http://www.organicthemes.com" target="_blank"><img style="margin-bottom: 3px;" src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="<?php _e("Organic Themes",'organicthemes'); ?>" /></a>
            </div>
    
            <div class="footerleft">
            	<p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date(__("Y", 'organicthemes')); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>
            	
                <p><?php _e("The", 'organicthemes'); ?> <a href="http://www.organicthemes.com/themes/" target="_blank"><?php _e("Natural Theme v2", 'organicthemes'); ?></a> <?php _e("by", 'organicthemes'); ?> <a href="http://www.organicthemes.com" target="_blank"><?php _e("Organic Themes", 'organicthemes'); ?></a> &middot; <a href="http://kahunahost.com" target="_blank" title="WordPress Hosting"><?php _e("WordPress Hosting", 'organicthemes'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>" target="_blank"><?php _e("RSS Feed", 'organicthemes'); ?></a> &middot; <?php wp_loginout(); ?></p>
            </div>	
    
        </div>
        
    </div>

</div>

<?php do_action('wp_footer'); ?>

</body>
</html>