<?php 
add_action('wp_head', 'custom_social_tags');
function custom_social_tags() {
    //getting the necessary values
    if ( is_single() ) {
        $image = get_the_post_thumbnail_url();
        $type = 'Article';
        $description = meta_get_the_excerpt();
    }else{
        $image = get_template_directory_uri() . '/assets/img/logo.png';
        $type = 'Website';
        $description = get_bloginfo('description');
    }
    $site_name = get_bloginfo('name');
    $url = get_the_permalink();
    $title = get_the_title();
    $twitter_card = 'summary';
?>
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:site_name" content="<?php echo $site_name; ?>" />
<meta property="og:type" content="<?php echo $type; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta name="twitter:image" content="<?php echo $image; ?>">
<meta name="twitter:site" content="<?php echo get_bloginfo('name'); ?>" />
<meta name="twitter:card" content="<?php echo $twitter_card; ?>" />
<meta name="twitter:title" content="<?php echo $title; ?>" />
<meta name="twitter:description" content="<?php echo $description ?>" />
    
<?php }
function meta_get_the_excerpt() {
    global $post;
    setup_postdata( $post );
    $output = get_the_excerpt();
    $output = str_replace('[&hellip;]', '', $output);
    return $output;
}
?>