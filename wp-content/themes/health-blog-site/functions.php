<?php

	//Root Path For Theme
	if( !defined('THEME_ROOT') ){ define('THEME_ROOT', get_template_directory_uri()); }

	//Includes
	include_once 'includes/remove-junk.php';
	include_once 'includes/meta-tags.php';

	$svgs = include('template-parts/common/SVG.php');
	function get_svgs($name){
		global $svgs;
		return (!empty($svgs[$name])?$svgs[$name]:'');
	}


	//Theme Support
	if( function_exists('add_theme_support') ){
		// Add Menu Support
	    add_theme_support('menus');

	    // Add Thumbnail Theme Support
	    add_theme_support('post-thumbnails');

	    //Add Image Sizes
	    $thumb_size = array(
	    	array(550, 550),
	    	array(400, 600),
	    	array(700, 490),
	    	array(700, 530),
	    	array(1000, 570),
	    );

	    foreach ($thumb_size as $key => $value) {
	    	$thumbnail_name = 'thumbnail_' . $value[0] . 'x' . $value[1];
	    	add_image_size( $thumbnail_name, $value[0],  $value[1], true );
	    }

	    //Allow Shortcode In Widget Area
	    add_filter('widget_text','do_shortcode');
	}

	//Register Navigation Location
	function register_theme_menus(){
		register_nav_menus( array(
			'category-menu'	=>	__('Category Menu'),
			'footer-menu'	=>	__('Footer Menu')
		) );
	}
	add_action( 'after_setup_theme', 'register_theme_menus' );

	//Load Theme assets
	function theme_assets(){
		wp_enqueue_style( 'thm-bootstrap', THEME_ROOT.'/assets/css/bootstrap.css', $deps = array(), filemtime( get_template_directory().'/assets/css/bootstrap.css' ), $media = 'all' );
		wp_enqueue_style('thm-fonts', 'https://fonts.googleapis.com/css?family=Assistant:400,600,700,900&display=swap', $deps = array(), false, $media = 'all');
		wp_enqueue_style( 'thm-stylesheet', THEME_ROOT.'/style.css', $deps = array('thm-bootstrap', 'thm-fonts'), filemtime( get_template_directory().'/style.css' ), $media = 'all' );
		wp_enqueue_script( 'thm-main', THEME_ROOT.'/assets/js/main.js', $deps = array(), filemtime( get_template_directory().'/assets/js/main.js' ), $in_footer = true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_assets' );

	$breadcrumbs_temp  = array(
		'template-about-us.php',
		'template-contact-us.php',
		'template-privacy-policy.php',
		'template-terms-of-use.php',
	);

	function get_breadcrumb() {	
		$before_html = '<div class="breadcrumb"><div class="container"><div class="breadcrumb-content">';
		$after_html = '</div></div></div>';
		$home =  '<a href="'.home_url().'" class="home" rel="nofollow">Home</a>'; 
		$sep = '<span class="sep">&gt;</span>';

		global $dispayBreadcrumb;
		global $breadcrumbs_temp;
		
        if( $dispayBreadcrumb ){
        	echo $before_html;
    	    echo $home;
    	    echo $sep;
		    if( is_single() ){  
				the_category(' &bull; ');
				echo $sep . '<span class="main-txt">';
		    	echo the_title();
		    	echo '</span>';
		    }elseif ( is_category() ) {
				echo '<span class="main-txt">';
		    	echo single_cat_title();
		    	echo '</span>';
		    }elseif( in_array( get_page_template_slug() , $breadcrumbs_temp) ){
    			echo '<span class="main-txt">';
    	    	echo the_title();
    	    	echo '</span>';
		    }
		    echo $after_html;
        }	    
	}

	function custom_excerpt_length($num) {
	    $excerpt = get_the_content();
	    $excerpt = strip_shortcodes($excerpt);
	    $excerpt = strip_tags($excerpt);
	    $the_string = substr($excerpt,0,$num);
	    echo $the_string . '...';
	}

	function custom_excerpt_length_title($num){
	    $excerpt = get_the_title();
	    $excerpt = substr($excerpt, 0, $num);
	    if(strlen($excerpt) < $num ){ echo $excerpt; }
	    else{ echo $excerpt ."..."; }
	}

	function wp_pagination() {
	    global $wp_query;
	    $big = 12345678;
	    $page  = max( 1, get_query_var( 'paged' ) );
	    $total = $wp_query->max_num_pages;

	    $page_format = paginate_links( array(
	        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	        'format' => '?paged=%#%',
	        'current' => max( 1, get_query_var('paged') ),
	        'total' => $total,
	        'type'  => 'array',
	        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14"> <path d="M0 7.02c-.003-.273.1-.537.287-.734L6.227.31c.26-.266.642-.37 1-.276.358.095.639.376.736.736.098.36-.003.746-.263 1.012L2.488 7.02 7.7 12.258c.37.411.355 1.044-.035 1.437s-1.016.408-1.425.035L.287 7.753C.1 7.556-.003 7.293 0 7.02z"/> </svg>',
	        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14"> <path d="M8 7.02c.003-.273-.1-.537-.287-.734L1.773.31c-.26-.266-.642-.37-1-.276C.415.13.134.41.037.77c-.098.36.003.746.263 1.012L5.512 7.02.3 12.258c-.37.411-.355 1.044.035 1.437s1.016.408 1.425.035l5.953-5.977c.187-.197.29-.46.287-.733z"/> </svg>'
	    ) );
	    if( is_array($page_format) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            $last_page = '>' . $total . '<';
            echo '<ul class="ul-pagination">';
            foreach ( $page_format as $page ) {
        		if((strpos($page, 'prev') !== false)){
        		    echo "<li class='li-page li-arrow li-prev'>$page</li>";
        		}else if((strpos($page, 'next') !== false)){
            		echo "<li class='li-page li-arrow li-next'>$page</li>";
            	}else if((strpos($page, '>1<') !== false)){
            		echo "<li class='li-page li-first-page'>$page</li>";
            	}else if((strpos($page, $last_page) !== false)){
            		echo "<li class='li-page li-last-page'>$page</li>";
            	}else{
            		echo "<li class='li-page'>$page</li>";
            	}                    
            }
           echo '</ul>';
	    }
	}