<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('title'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container clearfix"> 
			<h1 class="logo header-logo">
				<a class="logo-a disp-b text-hide" href="<?php echo home_url(); ?>"> <?php echo home_url(); ?>
					<?php echo get_svgs('common-logo'); ?>
				</a>
			</h1>			

		    <a href="javascript:void(0)" class="mobilemenu-icon">
	            <span></span><span></span><span></span>
	        </a>

	        <div class="searchform-wrap">
		        <form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		            <input type="text" required value="" name="s" id="searchtext" class="searchtext" placeholder='enter search term' autocomplete='off' />
		        	<input type="hidden" name="post_type" value="post" />
		        </form>
		        <div class="search-close-icon">
	        		<span class="search-icon"></span>
	        	</div>
	        </div>

		    <nav class="nav-menu">
	    		<?php wp_nav_menu( array( 'theme_location'=>'category-menu' ) ); ?>
		    </nav>	    
		</div>			
	</header>

	<?php get_breadcrumb(); // breadcrumb ?>	