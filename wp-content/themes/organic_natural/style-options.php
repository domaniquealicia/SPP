<style type="text/css" media="screen">
<?php 
	$menu_color = of_get_option('menu_color');  
	$link_color = of_get_option('link_color'); 
	$link_hover_color = of_get_option('link_hover_color');
	$shadow_color = of_get_option('shadow_color');
?>

.menu a:focus, .menu a:hover, .menu a:active, .menu .current_page_item a, .menu .current_page_ancestor a, .menu .current-menu-item a, .menu .current-cat a, .menu li li a, .menu li li a:focus, .menu li li a:hover, .menu li li a:active {
<?php 
	if ($menu_color) {
	    echo 'background-color: ' .$menu_color. ';';
    }; 
?>
}

#container a, #container a:link, #container a:visited, #footer a, #footer a:link, #footer a:visited, #footertop a, #footertop a:link, #footertop a:visited, #sidebar_right ul.menu .current_page_item a, #sidebar_right ul.menu .current-menu-item a, #sidebar_right ul.menu .current_page_ancestor a, #footerwidgets ul.menu .current_page_item a, #footerwidgets ul.menu .current-menu-item a, #footerwidgets ul.menu .current_page_ancestor a {
<?php 
	if ($link_color) {
	    echo 'color: ' .$link_color. ';';
    }; 
?>
}

#searchsubmit, #searchsubmit:hover, .commenticon, .homecontent a img:hover, #commentform #submit:hover, .reply a:hover, .reply a:visited {
<?php 
	if ($link_color) {
	    echo 'background-color: ' .$link_color. ';';
    }; 
?>
}

#commentform #submit:hover, .reply a:hover, .reply a:visited  {
<?php 
	if ($link_color) {
	    echo 'border-color: ' .$link_color. ';';
    }; 
?>
}

#container a:hover, #container h1 a:hover, #container h2 a:hover, #container h3 a:hover, #container h4 a:hover, #container h5 a:hover, #container h6 a:hover, #footertop a:hover, .more-link:hover {
<?php 
	if ($link_hover_color) {
	    echo 'color: ' .$link_hover_color. '!important;';
    }; 
?>
}

.pagecontent, .postcontent, #featurebanner img, #sidebar_right .widget, .teaser, #content.home, #navbar, .portfoliopost, .postarea.blog {
<?php 
	if ($shadow_color) {
	    echo 'box-shadow: 0px 1px 2px ' .$shadow_color. ';';
	    echo '-moz-box-shadow: 0px 1px 2px ' .$shadow_color. ';';
	    echo '-webkit-box-shadow: 0px 1px 2px ' .$shadow_color. ';';
    }; 
?>
}
</style>