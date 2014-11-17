<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<!-- .jQuery -->



<!-- jCarrousel -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.min.js"></script>
<!-- .jCarrousel -->



<!-- Mosaic -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.lite.js"></script>

<script type="text/javascript">	  
		
		jQuery(function($){ 
    			$('.slider').cycle({
           timeout: 5000,
           fx: 'fade',
           speed: 800,
           speedIn: 700,
           next:   '.next',
           prev:   '.prev'
         }); 
		}); 
				
</script>
<!-- .Mosaic -->


<script type="text/javascript">

		jQuery(function($){ 
    $('#mycarousel').jcarousel({
    	wrap: 'circular'
    });
});

</script>




<?php wp_head(); ?>


<script type="text/javascript" src="http://use.typekit.com/zta4wwd.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>
    <div id="page">
        <div id="header">
        <div class="menu_principal"><?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?></div>
        <div class="logo">
        <h1><a href="<?php bloginfo('url'); ?>/">
        <span><?php bloginfo('name'); ?></span></a></h1>
        <span class="descripcion-sitio"><?php bloginfo('description'); ?></span></div>
        </div>