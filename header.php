<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sth
 */

?><!DOCTYPE html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
<?php wp_head(); ?>
  		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
</head>

<body <?php body_class(); ?>>
  
  <nav class="navbar navbar-default navbar-topbar hidden-xs">
    <div class="container">
      <div class="row">
        <div id="topbar" class="">
          <?php wp_bootstrap_topbar();?>
        </div>
      </div>
    </div>
  </nav>
  
    <header role="banner">
      <div id="site-header">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <a class="navbar-brand hidden-xs" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
                <img class="" width="250" src="<?php echo get_template_directory_uri() . "/images/proud-five-logos-white.png"; ?>">
              </a>
              
            </div>
            <div class="col-md-5">
              <a title="Sheffield Teaching Hospitals NHS Foundation Trust main website" target="_blank" href="http://www.sth.nhs.uk/">
                <img class="navbar-brand img-logo img-responsive" src="<?php echo get_template_directory_uri() . "/images/STHFT_white_transparent.png"; ?>">
              </a>
            </div>
          </div>
        </div>
      </div>
				
			<nav class="navbar navbar-inverse affix-top" data-spy="affix" data-offset-top="50" data-offset-bottom="0">
				<div class="container">
          <div class="row">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>

            <div class="collapse navbar-collapse navbar-responsive-collapse">
                  <?php wp_bootstrap_main_nav(); ?>
            </div>
          </div>

				</div> <!-- end .container -->
			</nav> <!-- end .navbar -->
		
		</header> <!-- end header -->
  
  
<div id="page" class="hfeed site">
	<div id="content" class="site-content">
